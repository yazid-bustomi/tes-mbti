@extends('layouts.master')

@section('style')
    <style>
        .selectable-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 2px solid #ccc;
            background-color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .setuju:hover {
            background-color: #28a745;
        }

        .tidak_setuju:hover {
            background-color: #dc3545;
        }
    </style>
@endsection

@section('header-start')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tes MBTI</h4>
            <h5 class="d-flex justify-content-center mb-0 wow fadeInDown text-primary" data-wow-delay="0.3s"> Myers Briggs
                Type Indicator </h5>
        </div>
    </div>
@endsection

@section('content')
    <!-- Question Start -->
    <div class="container-fluid service py-5" id="question">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Silahkan Isi Tes Dibawah</h4>
                <h1 class="display-5 mb-4">Tes Kepribadian</h1>
                <p class="mb-0">Jadilah diri Anda sepenuhnya dan beri jawaban sejujurnya untuk mengetahui tipe kepribadian
                    Anda.
                </p>
            </div>
            <div class="row g-4">
                <form action="{{ route('result.store') }}" method="post">
                    @csrf
                    @auth
                        <input type="number" name="user_id" value="{{ Auth::user()->id }}" hidden>
                    @endauth
                    @foreach ($questions as $data)
                        <div class="timeline-panel text-center mb-5 p-4 bg-light rounded question-page wow fadeInUp"
                            data-wow-delay="0.2s" id="question-{{ $data->id }}">
                            <h4 class="subheading">{{ $data->question }}</h4>
                            <div class="form-group mt-4 d-flex justify-content-center align-items-center">
                                <label class="text-success fs-5 mb-0 me-2">Setuju</label>

                                <div class="form-check form-check-inline mx-3">
                                    <div class="selectable-circle setuju" id="setuju-{{ $data->id }}"
                                        onclick="selectOption('setuju', '{{ $data->id }}')"></div>
                                </div>

                                <div class="form-check form-check-inline mx-3">
                                    <div class="selectable-circle tidak_setuju" id="tidak_setuju-{{ $data->id }}"
                                        onclick="selectOption('tidak_setuju', '{{ $data->id }}')"></div>
                                </div>

                                <label class="text-danger fs-5 mb-0 ms-2">Tidak Setuju</label>
                            </div>
                            <input type="hidden" name="answers[{{ $data->id }}][{{ $data->dimension }}]"
                                id="answer-{{ $data->id }}" value="">
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center">
                            @if (Auth::check())
                            <button type="button" class="btn btn-secondary me-5" id="prevBtn"
                                onclick="changePage(-1)">Previous</button>
                            <button type="button" class="btn btn-secondary" id="nextBtn"
                                onclick="changePage(1)">Next</button>
                            <button type="submit" class="btn btn-primary ms-5 d-none" id="submitBtn">Submit</button>
                            @else
                            <div class="alert alert-danger wow fadeInUp">
                                <div>Silahkan Login Untuk Melanjutkan Tes</div>
                            </div>
                    @endif
            </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Question End -->
@endsection


@section('script')
    <script>
        let currentPage = 0; // Start with the first question
        const questions = document.getElementsByClassName('question-page');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');
        const questionPerPage = 6;

        // show page and pagination
        function showPage(pageIndex) {
            // Hide all questions
            for (let i = 0; i < questions.length; i++) {
                questions[i].style.display = 'none';
            }

            // Show the current question
            const start = pageIndex * questionPerPage;
            const end = Math.min(start + questionPerPage, questions.length);

            for (let i = start; i < end; i++) {
                questions[i].style.display = 'block';
            }

            // Manage the visibility of the buttons
            if (pageIndex === 0) {
                prevBtn.style.display = 'none';
            } else {
                prevBtn.style.display = 'inline';
            }

            if (end >= questions.length) {
                nextBtn.style.display = 'none';
                submitBtn.classList.remove('d-none');
            } else {
                nextBtn.style.display = 'inline';
                submitBtn.classList.add('d-none');
            }

            // check all answer filled on the current page
            checkAnswers();


            const testSection = document.getElementById('question'); // replace 'tes' with your actual ID
            testSection.scrollIntoView({
                behavior: 'smooth'
            });

        }

        // setting page
        function changePage(direction) {
            currentPage += direction;

            if (currentPage < 0) {
                currentPage = 0;
            }

            if (currentPage >= Math.ceil(questions.length / questionPerPage)) {
                currentPage = Math.ceil(questions.length / questionPerPage) - 1;
            }

            showPage(currentPage);
        }

        // set answer setuju atau tidak
        function selectOption(option, questionId) {
            const setujuElement = document.getElementById('setuju-' + questionId);
            const tidakSetujuElement = document.getElementById('tidak_setuju-' + questionId);

            setujuElement.style.backgroundColor = '';
            tidakSetujuElement.style.backgroundColor = '';

            if (option === 'setuju') {
                setujuElement.style.backgroundColor = '#28a745';
                document.getElementById('answer-' + questionId).value = 'yes';
            } else if (option === 'tidak_setuju') {
                tidakSetujuElement.style.backgroundColor = '#dc3545';
                document.getElementById('answer-' + questionId).value = 'no';
            }
            checkAnswers()
        }

        // cek jawaban jika sudah terpilih semua bisa next
        function checkAnswers() {
            const start = currentPage * questionPerPage;
            const end = Math.min(start + questionPerPage, questions.length);
            let allAnswered = true;

            for (let i = start; i < end; i++) {
                const questionId = questions[i].id.split('-')[1];
                const answer = document.getElementById('answer-' + questionId).value;

                if (!answer) {
                    allAnswered = false;
                    break;
                }
            }

            nextBtn.disabled = !allAnswered;
            submitBtn.disabled = !allAnswered;
        }

        showPage(currentPage);
    </script>
@endsection

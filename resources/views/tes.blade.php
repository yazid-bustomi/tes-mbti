<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tes MBTI</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo-itb.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Cek Khodam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Hasil Tes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tes">Tes Kepribadian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Tipe Kepribadian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di Tes MBTI</div>
            <div class="masthead-heading text-uppercase">Temukan Kepribadian Anda</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#tes">Mulai Tes Sekarang</a>
        </div>
    </header>

    <!-- Tes Kepribadian-->
    <section class="page-section" id="tes">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Tes Kepribadian</h2>
                <h3 class="section-subheading text-muted">
                    Jadilah diri Anda sepenuhnya dan beri jawaban sejujurnya untuk mengetahui tipe kepribadian Anda.
                </h3>
            </div>

            <form action="{{ route('result') }}" method="post">
                @csrf
                <input type="number" name="user_id" value="{{ Auth::user()->id }}" hidden>
                @foreach ($questions as $data)
                    <div class="timeline-panel text-center mb-5 p-4 bg-light rounded question-page"
                        id="question-{{ $data->id }}">
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
                        <input type="hidden" name="answers[]" id="answer-{{ $data->id }}" value="">
                    </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary me-5" id="prevBtn"
                        onclick="changePage(-1)">Previous</button>
                    <button type="button" class="btn btn-secondary" id="nextBtn"
                        onclick="changePage(1)">Next</button>
                       @auth
                       <button type="submit" class="btn btn-primary ms-5 d-none" id="submitBtn">Submit</button>
                     @else
                     <button type="submit" class="btn btn-primary ms-5 d-none" id="submitBtn" disabled>Submit</button>

                       @endauth
                </div>
            </form>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Silakan hubungi kami melalui formulir di bawah ini.</h3>
            </div>
            <!-- Contact Form -->
            <form id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <!-- Name Input -->
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                required />
                            <div class="invalid-feedback">A name is required.</div>
                        </div>
                        <!-- Email Input -->
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                required />
                            <div class="invalid-feedback">A valid email is required.</div>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="col-md-6">
                        <!-- Message Input -->
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required></textarea>
                            <div class="invalid-feedback">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">
                        Send Message via WhatsApp
                    </button>
                </div>
            </form>
        </div>
    </section>


    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    <a href="https://github.com/yazid-bustomi" class="text-decoration-none" target="_blank">Copyright
                        &copy; Bustomi</a>
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/bustomi024/"
                        aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/akhmad-yazid-bustomi/"
                        aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        let currentPage = 0; // Start with the first question
        const questions = document.getElementsByClassName('question-page');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');
        const questionPerPage = 6;

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


            const testSection = document.getElementById('tes'); // replace 'tes' with your actual ID
            testSection.scrollIntoView({
                behavior: 'smooth'
            });

        }

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
        }

        showPage(currentPage);
    </script>

    {{-- Send message to whatsapp --}}
    <script type="text/javascript">
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form dikirimkan dengan cara tradisional

            // Mengambil nilai dari form
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Format pesan WhatsApp
            const whatsappMessage = `Nama: ${name}%0AEmail: ${email}%0APesan: ${message}`;

            // Nomor WhatsApp untuk mengirim pesan (ganti dengan nomor internasional Anda)
            const whatsappNumber = '+6285646044393'; // Ganti dengan nomor WhatsApp tujuan

            // Buat URL WhatsApp
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

            // Buka URL WhatsApp di tab baru
            window.open(whatsappURL, '_blank');
        });
    </script>


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

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>

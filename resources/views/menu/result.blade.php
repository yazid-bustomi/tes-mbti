@extends('layouts.master')

@section('header-start')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Hasil Tes MBTI</h4>
        </div>
    </div>
    <!-- Header End -->
@endsection

@section('content')
    <!-- Offer Start -->
    <div class="container-fluid offer-section py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Hasil Tes</h4>
                <h1 class="display-5 mb-4">{{ $result->result_type }}</h1>
                <p class="mb-0">{{ $result->dimension->dimension }}</p>
                <p class="mb-0">{{ $result->dimension->description }}</p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="bg-light rounded p-5">
                        <div class="mb-4">
                            <h5 class="mb-1">
                                {{ $result->extroverted > $result->introved ? 'Ekstrovert' : 'Introvert' }}</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $result->extroverted > $result->introved ? $result->extroverted : $result->introved }}%;"
                                    aria-valuenow="{{ $result->extroverted > $result->introved ? $result->extroverted : $result->introved }}"
                                    aria-valuemin="0" aria-valuemax="100">
                                    {{ $result->extroverted > $result->introved ? $result->extroverted : $result->introved }}%
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5 class="mb-1">{{ $result->intuition > $result->sensing ? 'Intuition' : 'Sensing' }}</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $result->intuition > $result->sensing ? $result->intuition : $result->sensing }}%;"
                                    aria-valuenow="{{ $result->intuition > $result->sensing ? $result->intuition : $result->sensing }}"
                                    aria-valuemin="0" aria-valuemax="100">
                                    {{ $result->intuition > $result->sensing ? $result->intuition : $result->sensing }}%
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5 class="mb-1">{{ $result->thinking > $result->feeling ? 'Thinking' : 'Feeling' }}</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $result->thinking > $result->feeling ? $result->thinking : $result->feeling }}%;"
                                    aria-valuenow="{{ $result->thinking > $result->feeling ? $result->thinking : $result->feeling }}"
                                    aria-valuemin="0" aria-valuemax="100">
                                    {{ $result->thinking > $result->feeling ? $result->thinking : $result->feeling }}%
                                </div>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">{{ $result->judging > $result->perceiving ? 'Judging' : 'Perceiving' }}
                            </h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $result->judging > $result->perceiving ? $result->judging : $result->perceiving }}%;"
                                    aria-valuenow="{{ $result->judging > $result->perceiving ? $result->judging : $result->perceiving }}"
                                    aria-valuemin="0" aria-valuemax="100">
                                    {{ $result->judging > $result->perceiving ? $result->judging : $result->perceiving }}%
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ $result->dimension->img }}" class="img-fluid w-100 rounded"
                                        alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">{{ $result->dimension->slug }}</h1>
                                    <p class="mb-4">{{ $result->dimension->career_recommendation }}</p>
                                    <p class="mb-4">{{ $result->dimension->reason_career }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
@endsection

@extends('layouts.master')
@section('style')
<style>
    #tipeKepribadian {
        scroll-margin-top: 80px;
    }
</style>
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{ asset('assets/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h1 class="display-4 text-uppercase text-primary mb-4">Temukan Pribadi Anda Dengan
                                    Tes MBTI</h1>
                                <p class="mb-5 fs-5">MBTI (Myers-Briggs Type Indicator) Test adalah metode yang
                                    paling populer untuk memahami kepribadian. Pelajari bagaimana Anda berpikir,
                                    membuat keputusan, dan berinteraksi dengan dunia.
                                </p>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- About Start -->
    <div class="container-fluid about py-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Tentang TES MBTI</h4>
                        <h1 class="display-5 mb-4">Kenali Potensi Diri Anda dan Jangan Lewatkan Kesempatan Ini</h1>
                        <p class="mb-4">Tes MBTI membantu Anda memahami kepribadian Anda dengan lebih baik. Temukan
                            cara untuk mengembangkan diri dan memanfaatkan potensi yang ada dalam diri Anda.</p>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Konsultasi Tes</h4>
                                        <p>Temukan tipe anda untuk mengoptimalkan kemampuan dan mencapai tujuan yang
                                            lebih besar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Pengalaman</h4>
                                        <p>Kami telah membantu ribuan orang menemukan kekuatan kepribadian untuk meraih
                                            kesuksesan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="https://wa.me/+6285646044393" target="_blank"
                                    class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Temukan Saya</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Call Us</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">+6285646044393</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="{{ asset('assets/img/interview-tes-mbti.jpg') }}" class="img-fluid rounded w-100"
                            alt="">

                        <div class="rounded-bottom">
                            <img src="{{ asset('assets/img/macam-tipe-kepribadian.jpg') }}"
                                class="img-fluid rounded-bottom w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- All Type MBTI -->
    <div class="container-fluid service pb-5" id="tipeKepribadian">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Tipe Kepribadian Anda</h4>
                <h2 class="display-5 mb-4">Kenali Pribadi dan Maknai Setiap Langkah Dalam Hidup Anda</h2>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                @foreach ($dimensions as $dimensi)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ $dimensi->img }}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">{{ $dimensi->slug }}</a>
                                <p class="mb-4">{{ $dimensi->reason_career }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->

@endsection

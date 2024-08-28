@extends('layouts.master')

@section('header-start')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Hasil Tes</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Our offer</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection

@section('content')
    <!-- Offer Start -->
    <div class="container-fluid offer-section py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Offer</h4>
                <h1 class="display-5 mb-4">Benefits We offer</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="nav nav-pills bg-light rounded p-5">
                        <a class="accordion-link p-4 mb-4">
                            <h5 class="mb-0">Ekstrover</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4">
                            <h5 class="mb-0">Intuitif</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4">
                            <h5 class="mb-0">Pemikir</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0">
                            <h5 class="mb-0">Penilai</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ asset('assets/img/offer-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-4">INTJ</h1>
                                    <p class="mb-4">Deskripsi Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, perspiciatis. Repudiandae sequi perspiciatis culpa officia voluptates, debitis nobis at voluptatum.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
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

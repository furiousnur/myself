@extends('layouts.frontend.layout')
@section('title') Portfolio Details @endsection
@section('content')
    <div class="intro intro-single route bg-image" style="background-image: url(frontend/assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Portfolio Details</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Portfolio Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
        <section class="portfolio-details">
            <div class="container">

                <div class="portfolio-details-container">

                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="{{asset('frontend')}}/assets/img/portfolio-details-1.jpg" class="img-fluid" alt="">
                        <img src="{{asset('frontend')}}/assets/img/portfolio-details-2.jpg" class="img-fluid" alt="">
                        <img src="{{asset('frontend')}}/assets/img/portfolio-details-3.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>Client</strong>: ASU Company</li>
                            <li><strong>Project date</strong>: 01 March, 2020</li>
                            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>

                </div>

                <div class="portfolio-description">
                    <h2>This is an example of portfolio detail</h2>
                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                    </p>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
    <!-- End #main -->
@endsection

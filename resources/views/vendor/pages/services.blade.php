@extends('layouts.frontuser')
@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('siteasset/assets/img/services-header.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>الخدمات</h2>
                <ol>
                    <li><a href="{{ route('home') }}">الرئيسية</a></li>
                    <li>الخدمات</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Our Services Section ======= -->
        <section id="services-list" class="services-list">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>خدماتنا</h2>

                </div>

                <div class="row gy-5">

                    @foreach ($service as $item)
                        <div class="col-lg-4 col-md-6 service-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0">
                                <img src="{{ asset('uploads/images/service/'.$item->image) }}" alt="" width="50">
                            </div>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">{{ $item->text }}</a></h4>
                            </div>
                        <!-- End Service Item -->
                    </div>
                    @endforeach





            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Services Cards Section ======= -->
        <section id="services-cards" class="services-cards">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    @foreach ($big as $item)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url({{ asset('uploads/images/service/'.$item->image) }});"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $item->title }}</h4>
                                        <p>{{ $item->text }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                    @endforeach




                </div>

            </div>
        </section><!-- End Services Cards Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>نبذة عن فريقنا</h2>

                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @foreach ($team as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    {{ $item->text }}
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('uploads/images/team/'.$item->image) }}" class="testimonial-img"
                                        alt="">
                                    <h3>{{ $item->name }}</h3>
                                    <h4>{{ $item->job_title }}</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        @endforeach



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

@stop

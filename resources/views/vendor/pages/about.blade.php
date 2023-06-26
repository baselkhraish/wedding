@extends('layouts.frontuser')
@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('siteasset/assets/img/about-header.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>عنا</h2>
                <ol>
                    <li><a href="{{ route('home') }}">الرئيسية</a></li>
                    <li>عنا</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img src="{{ asset('siteasset/assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                            <h3>ما نتميز به</h3>
                            <p>
                                لا تفوت الفرصة, انشئ حسابك الآن و احصل على موقعك بشكل مباشر
                                <br>
                                للمزيد من الراحة عليك إضافة أعمالك إلى المنصة و مقالات لتبين لهم كم أنت مبدع
                                <br>
                                يمكنك الحصول على موقعك الإلكتروني بخاصية احترافية
                            </p>
                            <ul>
                                @foreach ($service as $item)
                                    <li><i class="bi bi-check-circle-fill"></i>
                                        {{ $item->text }}
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>لماذا تختارنا</h2>

                </div>

                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-xl-5 img-bg" style="background-image: url('{{ asset('siteasset/assets/img/why-us-bg.jpg') }}')"></div>
                    <div class="col-xl-7 slides  position-relative">

                        <div class="slides-1 swiper">
                            <div class="swiper-wrapper">

                                @foreach ($about as $item)
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <h3 class="mb-3">{{ $item->title1 }}</h3>
                                            <h4 class="mb-3">{{ $item->title2 }}</h4>
                                            <p>{{ $item->text }}</p>
                                        </div>
                                    </div><!-- End slide item -->
                                @endforeach



                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Choose Us Section -->



        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Ut fugiat aliquam aut non</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>فريقنا</h2>

                </div>

                <div class="row gy-4">

                    @foreach ($team as $item)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('uploads/images/team/'.$item->image) }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href="{{ $item->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ $item->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ $item->whatsapp }}" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                        <a href="{{ $item->linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->name }}</h4>
                                    <span>{{ $item->job_title }}</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach


                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->

@stop

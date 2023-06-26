@extends('layouts.frontuser')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 data-aos="fade-up">{{ $setting->advs_1 }}</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>{{ $setting->advs_2 }}</p>
                    </blockquote>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('register') }}" class="btn-get-started">ابدأ الآن</a>
                        <a href="{{ $setting->vid }}" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle" style="margin-left: 5px !important;"></i><span>شاهد
                                الفيديو</span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero Section -->



    <main id="main">

        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>مميزاتنا</h2>

                </div>

                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                    <!-- Slider -->

                        <div class="col-xl-7 slides  position-relative">
                            <div class="slides-1 swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($about as $item)
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <h3 class="mb-3">{{ $item->title1 }} </h3>
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



                    <!-- Photo -->
                    <div class="col-xl-5 img-bg"
                        style="background-image: url('{{ asset('siteasset/assets/img/why-us-bg.jpg') }}')"></div>

                </div>

            </div>
        </section><!-- End Why Choose Us Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services-list" class="services-list">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>خدماتنا الشائعة</h2>

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
                        </div>
                        <!-- End Service Item -->
                    @endforeach



                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>تواصل مع الدعم الفني </h3>
                        <p>يمكنك التواصل مع الدعم الفني بشكل عاجل باستخدام واتساب</p>
                        <a class="cta-btn" href="https://wa.me/970597814587" target="_blank">الدعم الفني</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->


        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>آخر المقالات المشهورة على الموقع</h2>

                </div>

                <div class="row gy-5">

                    @foreach ($blog as $item)
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-box">
                                <div class="post-img"><img src="{{ asset('uploads/images/'.$item->image) }}"
                                        class="img-fluid" alt=""></div>
                                <div class="meta">
                                    <span class="post-author"> {{ $item->user->name }}</span>
                                    <span class="post-date">/ {{ $item->created_at->format('Y-m-d') }}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ route('blogDetails',$item->id) }}">{{ $item->title }}</a>
                                </h3>
                                <p>{{ $item->meta_description }}</p>
                                <a href="{{ route('blogDetails',$item->id) }}" class="readmore stretched-link"><span>قراءة المزيد</span><i
                                        class="bi bi-arrow-left"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Recent Blog Posts Section -->

    </main>
    <!-- End #main -->
@stop

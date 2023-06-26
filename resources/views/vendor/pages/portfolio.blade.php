@extends('layouts.frontuser')
@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('siteasset/assets/img/portfolio-header.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>أعمالنا</h2>
                <ol>
                    <li><a href="{{ route('home') }}">الرئيسية</a></li>
                    <li>أعمالنا</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope">
                    <div class="row gy-4 portfolio-container">

                        @foreach ($portfolio as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item">
                                <a href="{{ route('portfolioDetails',$item->id) }}"><img src="{{ asset('uploads/images/portfolio/'.$item->img_1) }}" class="img-fluid" alt="" style="width: 500px !important ;
                                    height:350px !important; object-fit: cover !important;
                                ">
                                </a>
                                <div class="portfolio-info">
                                    <a href="{{ route('portfolioDetails',$item->id) }}"><h4>{{ $item->title_work }}</h4></a>
                                    <p>{{ $item->text_work }}</p>
                                    <a href="{{ asset('uploads/images/portfolio/'.$item->img_1) }}" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="{{ $item->url }}" target="_blank" title="انتقل إلى العمل" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

@stop

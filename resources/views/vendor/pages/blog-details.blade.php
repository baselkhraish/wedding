@extends('layouts.frontuser')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('siteasset/assets/img/blog-header.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>تفاصيل المقالة</h2>
        <ol>
          <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
          <li>تفاصيل المقالة</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{ $blog->title }}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{ $blog->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock" style="float: right;"></i> <a href="blog-details.html" class="ml-3"><time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('Y-m-d') }}</time></a></li>
                </ul>
                <hr>
              </div><!-- End meta top -->

              <div class="content">

                <img src="{{ asset('uploads/images/'.$blog->image) }}" class="img-fluid" alt="">

                <h3>{{ $blog->title }}</h3>
                <p>
                  {{ $blog->description }}
                </p>

              </div><!-- End post content -->


            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End post author -->


          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">الأقسام</h3>
                <ul class="mt-3">
                    @foreach ($categories as $item)
                        <li><a href="#">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">المقالات الأخيرة</h3>

                <div class="mt-3">


                @foreach ($recent as $blog)
                    <div class="post-item mt-3">
                        <a href="{{ route('blogDetails',$blog->id) }}">
                            <img src="{{ asset('uploads/images/'.$blog->image) }}" alt="" class="flex-shrink-0">
                        </a>
                        <div>
                        <h5><a href="{{ route('blogDetails',$blog->id) }}">{{ $blog->title }}</a></h5>
                        <time datetime="2020-01-01">{{ $blog->created_at->format('Y-m-d') }}</time>
                        </div>
                    </div><!-- End recent post item-->
                @endforeach




                </div>

              </div><!-- End sidebar recent posts-->


            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

@stop

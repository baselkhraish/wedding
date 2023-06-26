@extends('layouts.frontuser')
@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('siteasset/assets/img/blog-header.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Blog</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Blog</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="row gy-5 posts-list">

                            @foreach ($blogs as $item)
                                <div class="col-lg-6">
                                    <article class="d-flex flex-column">

                                        <div class="post-img">
                                            <img src="{{ asset('uploads/images/'.$item->image) }}" style="object-fit: cover;" alt="" class="img-fluid">
                                        </div>

                                        <h2 class="title">
                                            <a href="{{ route('blogDetails',$item->id) }}">{{ $item->title }}</a>
                                        </h2>

                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                        href="{{ route('blogDetails',$item->id) }}">{{ $item->user->name }}</a></li>
                                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                        href="{{ route('blogDetails',$item->id) }}"><time datetime="2022-01-01">{{ $item->created_at->format('Y-m-d') }}</time></a></li>
                                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                        href="{{ route('blogDetails',$item->id) }}">12 Comments</a></li>
                                            </ul>
                                        </div>

                                        <div class="content">
                                            <p>
                                                {{ $item->meta_description }}
                                            </p>
                                        </div>

                                        <div class="read-more mt-auto align-self-end">
                                            <a href="{{ route('blogDetails',$item->id) }}">Read More <i class="bi bi-arrow-left"></i></a>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->
                            @endforeach

                        </div><!-- End blog posts list -->

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div><!-- End blog pagination -->

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
                                <h3 class="sidebar-title">Categories</h3>
                                <ul class="mt-3">
                                    <li><a href="#">General <span>(25)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                    <li><a href="#">Travel <span>(5)</span></a></li>
                                    <li><a href="#">Design <span>(22)</span></a></li>
                                    <li><a href="#">Creative <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>

                                <div class="mt-3">

                                    <div class="post-item mt-3">
                                        <img src="{{ asset('siteasset/assets/img/blog/blog-recent-1.jpg') }}" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-post.html">Nihil blanditiis at in nihil autem</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="{{ asset('siteasset/assets/img/blog/blog-recent-2.jpg') }}" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-post.html">Quidem autem et impedit</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="{{ asset('siteasset/assets/img/blog/blog-recent-3.jpg') }}" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-post.html">Id quia et et ut maxime similique occaecati ut</a>
                                            </h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="{{ asset('siteasset/assets/img/blog/blog-recent-4.jpg') }}" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-post.html">Laborum corporis quo dara net para</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="{{ asset('siteasset/assets/img/blog/blog-recent-5.jpg') }}" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="blog-post.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                </div>

                            </div><!-- End sidebar recent posts-->

                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Tags</h3>
                                <ul class="mt-3">
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Studio</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End Blog Sidebar -->

                    </div>

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->


@stop

@extends('layouts.site')
@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px; text-align: right;">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i
                                    class="fa fa-angle-down float-left mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 ml-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @include('site.file.sidebar')
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">الأقسام</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">الرئيسية</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">الأقسام</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-12">
                <div class="row pb-3">
                    <!-- Categories Start -->
                    <div class="container-fluid">
                        <div class="row px-xl-5 pb-3">
                            @foreach ($category as $item)
                            <div class="col-lg-4 col-md-6 pb-1">
                                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                                    <a href="{{ route('category.product',$item->id) }}" class="cat-img position-relative overflow-hidden mb-3" style="height: 250px">
                                        <img class="img-fluid" src="{{ asset('uploads/images/category/'.$item->image) }}" alt="" style="height: 300px; object-fit: contain" >
                                    </a>
                                    <div class="d-flex justify-content-between align-items-center p-3">
                                        <div><a href="{{ route('category.vendor',$item->id) }}" class="btn btn-primary">مشاهدة كل البائعين</a></div>
                                        <div><a href="{{ route('category.product',$item->id) }}" class="btn btn-primary">مشاهدة كل الخدمات</a></div>
                                    </div>
                                    <a href="{{ route('category.product',$item->id) }}" class="mt-3">
                                        <h5 class="font-weight-semi-bold m-0 text-center">{{ $item->name }}</h5>
                                    </a>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- Categories End -->


                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
@endsection

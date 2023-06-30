@extends('layouts.site')
@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px; text-align: right;">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-left mt-1"></i></a>
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
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 ml-1">E</span>Shopper</h1>
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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">المنتجات</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">الرئيسية</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">المنتجات</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">


            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by name">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @foreach ($products as $item)
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <a href="{{ route('product_details',$item->id) }}">
                                        <img class="img-fluid w-100" src="{{ asset('uploads/images/product/'.$item->image) }}" alt="{{ $item->name }}" title="{{ $item->name }}" style="height: 300px; object-fit: contain" >
                                    </a>
                                </div>
                                <div class="card-body border-right border-left text-center p-0 pt-4 pb-3">
                                    <div class="d-flex justify-content-between align-items-center pr-5 pl-5 mb-3">

                                        <div>المحل :  <a href="{{ route('vendor.product',$item->vendor->id) }}"><span>{{ $item->vendor->name }}</span></a></div>

                                        <div>القسم :  <a href="{{ route('category.product',$item->vendor->category->id) }}"><span>{{ $item->vendor->category->name }}</span></a></div>
                                    </div>
                                    <a href="{{ route('product_details',$item->id) }}"><h6 class="text-truncate mb-3">{{ $item->name }}</h6></a>
                                    <div class="d-flex justify-content-center">
                                        @if($item->sale_price === null)
                                            <h6>${{ $item->price }}</h6></h6>
                                        @else
                                        <h6>${{ $item->sale_price }}</h6><h6 class="text-muted mr-2"><del>${{ $item->price }}</del></h6>

                                        @endif
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary ml-1"></i>View Detail</a>
                                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary ml-1"></i>Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

@endsection

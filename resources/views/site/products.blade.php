@extends('layouts.site')
@section('content')

    <!-- Navbar Start -->
    @include('site.file.navbar')
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">الخدمات</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">الرئيسية</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">الخدمات</p>
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


                                        {{-- <div>القسم :  <a href="{{ route('category.product',$item->vendor->category->id) }}"><span>{{ $item->vendor->category->name }}</span></a></div> --}}
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
                                <div class="card-footer d-flex justify-content-center bg-light border">
                                    <a href="{{ route('product_details',$item->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary ml-1"></i> المزيد</a>
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

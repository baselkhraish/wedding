@extends('layouts.site')
@section('content')
    <!-- Navbar Start -->
    @include('site.file.navbar')
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">المحلات</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">الرئيسية</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">المحلات</p>
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
                            @foreach ($vendor as $item)
                                <div class="col-lg-4 col-md-6 pb-1">
                                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                                        <a href="{{ route('vendor.product',$item->id) }}" class="cat-img position-relative overflow-hidden mb-3"
                                        style="height: 250px">
                                        <img class="img-fluid"
                                        src="{{ asset('uploads/images/vendor/' . $item->image) }}" alt=""
                                        style="height: 300px; object-fit: contain">
                                    </a>
                                    <p class="text-center">{{ $item->product->count() }} منتج</p>
                                        <a href="{{ route('vendor.product',$item->id) }}">
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

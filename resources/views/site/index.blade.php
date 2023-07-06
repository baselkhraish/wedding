@extends('layouts.site')

@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">الفئات</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px; text-align: right;">
                        @php
                            $category = App\Models\Category::orderByDesc('id')->take(8)->get();
                        @endphp

                        @foreach ($category as $item)
                            <a href="{{ route('category.product',$item->id) }}" class="nav-item nav-link">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 ml-1 text-right">إدارة</span>الزفاف</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @include('site.file.sidebar')
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">الأول عربياً و الأكثر شهرة</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">نقدم خدمات لا مثيل لها</h3>
                                    <a href="{{ route('category') }}" class="btn btn-light py-2 px-3">الأقسام</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="https://images.unsplash.com/photo-1505406165273-6631d6f7fc68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">الوصول إلى كل المحلات بضغطة زر</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">تشمل أشهر محلات قطاع غزة</h3>
                                    <a href="{{ route('vendor') }}" class="btn btn-light py-2 px-3">المحلات</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="https://i.pinimg.com/564x/99/b0/24/99b024a8699ff4028151c7f6cb313398.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">الخدمات الأكثر أهمية و الأعلى جودة</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">نقدم لكم أفضل خدمات القطاع</h3>
                                    <a href="{{ route('products') }}" class="btn btn-light py-2 px-3">الخدمات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 ml-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">جودة عالية</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 ml-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">تصفح كل الخدمات</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 ml-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">حجز الخدمات الكترونيا</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 ml-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">الدعم الفني </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
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


    <!-- Offer Start -->
    <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    <img src="https://images.unsplash.com/photo-1552284696-91da120af7da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">الأفضل عربياً والأعلى جودة</h5>
                        <h3 class="mb-4 font-weight-semi-bold">خدماتنا الأكثر نفعاً لكم </h3>
                        <a href="{{ route('category') }}" class="btn btn-outline-primary py-md-2 px-md-3">خدماتنا</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="https://images.unsplash.com/photo-1525258946800-98cfd641d0de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3"> تقديم الخدمات الأكثر نفعاً</h5>
                        <h3 class="mb-4 font-weight-semi-bold">نحرص على توفير وقتكم  </h3>
                        <a href="{{ route('vendor') }}" class="btn btn-outline-primary py-md-2 px-md-3">المحلات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    @foreach ($product_0 as $category)
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">{{ $category->name }}</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach ($category->vendor as $vendor)
                @foreach ($vendor->product as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="{{ route('product_details',$product->id) }}">
                                <img class="img-fluid w-100" src="{{ asset('uploads/images/product/'.$product->image) }}" alt="" style="height: 300px; object-fit: contain" >
                            </a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <a href="{{ route('vendor.product',$product->vendor->id) }}"><p class="text-center">{{ $product->vendor->name }}</p></a>
                            <a href="{{ route('product_details',$product->id) }}"><h6 class="text-truncate mb-3">{{ $product->name }}</h6></a>
                            <div class="d-flex justify-content-center">
                                @if($product->sale_price === null)
                                    <h6>${{ $product->price }}</h6></h6>
                                @else
                                <h6>${{ $product->sale_price }}</h6><h6 class="text-muted mr-2"><del>${{ $product->price }}</del></h6>

                                @endif

                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center bg-light border">
                            <a href="{{ route('product_details',$item->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary ml-1"></i> المزيد</a>
                        </div>

                    </div>
                </div>
                @endforeach

            @endforeach


        </div>
    </div>
    @endforeach

    <!-- Products End -->


    <!-- Subscribe Start -->
    <div class="container-fluid bg-secondary">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">تابع كل التحديثات</span></h2>
                    <p>يمكنك متابعة كل الأخبار المتعلقة في موقعنا , و يمكنك متابعتها عن طريق الجيميل</p>
                </div>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-4" placeholder="ايميلك؟">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">اشتراك</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->


@stop

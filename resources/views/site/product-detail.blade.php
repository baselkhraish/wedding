@extends('layouts.site')
@section('content')

    <!-- Navbar Start -->
        @include('site.file.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">{{ $product->name }}</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">الرئيسية</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">{{ $product->name }}</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-4 pb-5">
                <div id="product-carousel" class="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{ asset('uploads/images/product/'.$product->image) }}" alt="Image" style="width: 400px !important; height: 450px !important; object-fit: contain">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pb-5">
                <h3 class="font-weight-semi-bold text-right">{{ $product->name }}</h3>

                @if($product->sale_price === null)
                    <h3 class="font-weight-semi-bold mb-4 text-right text-primary">${{ $product->price }}</h3>
                @else
                <h3 class="font-weight-semi-bold mb-4 text-right text-primary">${{ $product->sale_price }}</h3>

                @endif

                <p class="mb-4 text-right">{{ $product->description }}.</p>

                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 ml-2">مشاركة في :</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pb-5">
                <div>


                    <table class="table">
                        <form action="{{ route('reservation') }}" method="POST">
                            @csrf
                            @if($product->sale_price === null)
                                <input type="hidden" name="price" value="{{ $product->price }}">
                            @else
                            <input type="hidden" name="price" value="{{ $product->sale_price }}">
                            @endif

                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="vendor_id" value="{{ $product->vendor->id }}">
                            <tr><td colspan="2" class="text-center" >للحجز من هنا</td></tr>
                            <tr>
                                <th  scope="col" class="text-right">يوم الحجز</th>
                                <td class="text-right">
                                    <input type="date" name="date" class="form-control  @error('date') is-invalid @enderror" value="{{ old('date') }}">
                                    @error('date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th  scope="col" class="text-right">رقم الهاتف للتواصل</th>
                                <td class="text-right">
                                    <input type="text" name="phone" placeholder="XXXXXXXX" value="{{ old('phone') }}"class="form-control  @error('phone') is-invalid @enderror">
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                            <tr><td colspan="2" class="text-center" ><button type="submit" class="btn btn-primary">احجز الآن</button></td></tr>
                        </form>
                    </table>

                </div>
            </div>
        </div>

        <div class="row px-xl-5">
            <div class="col-lg-12 pb-5">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th class="text-right">التاريخ</th>
                            <th class="text-right">الحالة</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservation as $item)
                            <tr>
                                <td class="text-right">{{ $item->date }}</td>
                                <td class="text-right">
                                    @if($item->status === 'accepted')
                                        <p class="text-success">محجوز</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <!-- Shop Detail End -->
@stop

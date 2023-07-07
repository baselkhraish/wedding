<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ادارة حفل الزفاف" name="keywords">
    <meta content="Free HTML Templates" name="يهتم موقعنا بإدارة حفلات الزفاف في قطاع غزة و يسهل على العرسان الوصول إلى كل المحلات في موقعنا , نهتم أيضاً بتوفير وقتكم و جهدكم">

    <!-- Favicon -->
    <link href="{{ asset('siteasset/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('siteasset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('siteasset/css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body dir="rtl">
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block" style="text-align:right;">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="https://wa.me/970597814587">اقتراح جديد</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="https://wa.me/970597814587">مساعدة</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="https://wa.me/970597814587">الدعم الفني</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center">
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
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold text-right"><span class="text-primary font-weight-bold border px-3 ml-1">إدارة</span>الزفاف</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">

                <form action="{{ route('search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ request()->keyword }}" placeholder="ابحث الخدمة التي تريدها"  name="keyword">
                        <div class="input-group-append">

                            <button type="submit" class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            {{-- <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div> --}}
        </div>
    </div>
    <!-- Topbar End -->




    @yield('content')





    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pl-3 pl-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold text-right"><span class="text-primary font-weight-bold border border-white px-3 ml-1">إدارة</span> الزفاف </h1>
                </a>
                <p>

                </p>
                <p class="mb-2 text-right"><i class="fa fa-map-marker-alt text-primary ml-3"></i>فلسطين - غزة</p>
                <p class="mb-2 text-right"><i class="fa fa-envelope text-primary ml-3"></i>wedding-planner@gmail.com</p>
                <p class="mb-0 text-right"><i class="fa fa-phone-alt text-primary ml-3"></i>+970597814587</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4  text-right">روابط سريعة</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2  text-right" href="{{ route('home') }}">الرئيسية<i class="fa fa-angle-left mr-2"></i></a>
                            <a class="text-dark mb-2  text-right" href="{{ route('category') }}">الأقسام<i class="fa fa-angle-left mr-2"></i></a>
                            <a class="text-dark mb-2  text-right" href="{{ route('vendor') }}">المحلات<i class="fa fa-angle-left mr-2"></i></a>
                            <a class="text-dark mb-2  text-right" href="{{ route('products') }}">الخدمات<i class="fa fa-angle-left mr-2"></i></a>
                        </div>
                    </div>

                    @php
                        $category = App\Models\Category::orderByDesc('id')->take(4)->get();
                    @endphp
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4  text-right">أحدث الأقسام</h5>
                        <div class="d-flex flex-column justify-content-start">
                            @foreach ($category as $item)
                                <a class="text-dark mb-2  text-right" href="{{ route('category.product',$item->id) }}">{{ $item->name }}<i class="fa fa-angle-left mr-2"></i></a>
                            @endforeach
                        </div>
                    </div>


                    @php
                        $vendor = App\Models\Vendor::inRandomOrder('id')->whereNotNull('name')->take(4)->get();
                    @endphp
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4  text-right">أحدث المحلات</h5>
                        <div class="d-flex flex-column justify-content-start">
                            @foreach ($vendor as $item)
                                <a class="text-dark mb-2  text-right" href="{{ route('vendor.product',$item->id) }}">{{ $item->name }}<i class="fa fa-angle-left mr-2"></i></a>
                            @endforeach
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-12 px-xl-0">
                <p class="mb-md-0 text-center text-center text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="{{ route('home') }}">ادارة مناسبات الزفاف</a>. جميع الحقوق محفوظة.

					تم تصميمه بواسطة <a class="text-dark font-weight-semi-bold" target="_blank" href="https://linktr.ee/basel_khraish">م.باسل خريش</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('siteasset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('siteasset/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('siteasset/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('siteasset/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('siteasset/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        @if (session('success'))
            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            })
        @endif
    </script>
    @yield('script')
</body>

</html>


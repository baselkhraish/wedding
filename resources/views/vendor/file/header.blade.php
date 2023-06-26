<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">


        <nav id="navbar" class="navbar">
            <ul>

                <li><a href="{{ route('user.home',$user) }}" class="{{ Route::is('user.home') ? 'active' : '' }}">الصفحة الرئيسية</a></li>
                <li><a href="{{ route('user.about',$user) }}" class="{{ Route::is('user.about') ? 'active' : '' }}">عنا</a></li>
                <li><a href="{{ route('user.services',$user) }}" class="{{ Route::is('user.services') ? 'active' : '' }}">خدماتنا</a></li>
                <li><a href="{{ route('user.portfolio',$user) }}" class="{{ Route::is('user.portfolio') ? 'active' : '' }}">أعمالنا</a></li>
                <li><a href="{{ route('user.blog',$user) }}" class="{{ Route::is('user.blog') ? 'active' : '' }}">مقالتنا</a></li>
            </ul>
        </nav><!-- .navbar -->


        @auth

            <a class="btn btn-primary" href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>

        @else
            <div>
                <a href="{{ route('login') }}" class="btn btn-primary" style="font-weight: bold; font-size: 14px;">الدخول</a>
                <a href="{{ route('register') }}" class="btn btn-primary" style="font-weight: bold; font-size: 14px;">انشئ حسابك الآن</a>
            </div>
        @endauth


        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->

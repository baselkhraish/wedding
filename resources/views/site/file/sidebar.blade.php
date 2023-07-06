<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <div class="navbar-nav ml-auto py-0">
        <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">الرئيسية</a>
        <a href="{{ route('category') }}" class="nav-item nav-link  {{ Route::is('category') ? 'active' : '' }}">الأقسام</a>
        <a href="{{ route('vendor') }}" class="nav-item nav-link  {{ Route::is('vendor') ? 'active' : '' }}">المحلات</a>
        <a href="{{ route('products') }}" class="nav-item nav-link {{ Route::is('products') ? 'active' : '' }}">الخدمات</a>
    </div>

    @if(Auth::check())
        <div class="navbar-nav mr-auto py-0">
            <a href="{{ route('admin.index') }}" class="nav-item nav-link"><i class="fas fa-user"></i> <b>لوحة التحكم</b> </a>
        </div>

    @else
        <div class="navbar-nav mr-auto py-0">
            <a href="{{ route('register') }}" class="nav-item nav-link">دخول كمستخدم</a>
            <a href="{{ route('register_vendor') }}" class="nav-item nav-link">دخول كبائع</a>
        </div>

    @endif
</div>

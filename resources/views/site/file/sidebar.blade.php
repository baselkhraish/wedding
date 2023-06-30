<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <div class="navbar-nav ml-auto py-0">
        <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">الرئيسية</a>
        <a href="{{ route('category') }}" class="nav-item nav-link  {{ Route::is('category') ? 'active' : '' }}">الأقسام</a>
        <a href="{{ route('vendor') }}" class="nav-item nav-link  {{ Route::is('vendor') ? 'active' : '' }}">المحلات</a>
        <a href="{{ route('products') }}" class="nav-item nav-link {{ Route::is('products') ? 'active' : '' }}">المنتجات</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">الصفحات</a>
            <div class="dropdown-menu rounded-0 m-0">
                <a href="cart.html" class="dropdown-item">بطاقة الدفع</a>
                <a href="checkout.html" class="dropdown-item">تعبئة بيانات الدفع</a>
            </div>
        </div>
        <a href="contact.html" class="nav-item nav-link">اتصل بنا</a>
    </div>
    <div class="navbar-nav mr-auto py-0">
        <a href="" class="nav-item nav-link">دخول كمستخدم</a>
        <a href="" class="nav-item nav-link">دخول كبائع</a>
    </div>
</div>

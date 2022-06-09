<ul class="navbar-nav ms-auto me-4 topNav">
    <li class="nav-item"><a class="nav-link text-white {{ Route::is('HomePay.homeWebPay') ? 'active' : null }}" href="{{route('HomePay.homeWebPay')}}">Trang chủ</a></li>
    <li class="nav-item"><a class="nav-link text-white {{ Route::is('HomePay.aboutWebPay') ? 'active' : null }}" href="{{route('HomePay.aboutWebPay')}}">Về OmiPay</a></li>
    <li class="nav-item"><a class="nav-link text-white {{ Route::is('HomePay.productWebPay') ? 'active' : null }}" href="{{route('HomePay.productWebPay')}}">Sản phẩm</a></li>
    <li class="nav-item"><a class="nav-link text-white {{ Route::is('HomePay.newWebPay') ? 'active' : null }}" href="{{route('HomePay.newWebPay')}}">Tin tức</a></li>
    <li class="nav-item"><a class="nav-link text-white {{ Route::is('HomePay.contactWebPay') ? 'active' : null }}" href="{{route('HomePay.contactWebPay')}}">Liên hệ</a></li>
</ul>
<div class="d-none d-lg-block"><a class="btn btn-primary btn-sm text-white btn-register" href="{{route('HomePay.register')}}">Đăng Ký</a></div>

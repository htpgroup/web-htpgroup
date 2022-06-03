<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('themes/htp_group_html/images/favicon.ico')}}" />
    <title>Htp Group</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('themes/htp_group_html/css/style.css')}}">
    <link href="{{asset('themes/htp_group_html/css/bootstrap.min.css')}}" rel="stylesheet">
    @yield('style')
</head>
<body>
<nav class="flex-div">
    <div class="nav-left flex-div">
        <div class="menu-mobile"></div>
        <img src="{{asset('themes/htp_group_html/images/menu.png')}}" alt="menu" class="menu-icon-mobile">
        <div class="menu-mobile-cancel hide"></div>
        <img src="{{asset('themes/htp_group_html/images/icon/htp_logo.png')}}" id="imgHomeLogo" alt="" class="logo">
    </div>
    <div class="nav-middle">
        <ul>
            <li class="{{ Route::is('HomeHTP.homeWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.homeWebPay')}}">Trang chủ</a></li>
            <li class="{{ Route::is('HomeHTP.aboutWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.aboutWebPay')}}">Giới thiệu</a></li>
            <li class="{{ Route::is('HomeHTP.securityPolicyWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.homeWebPay')}}">Lĩnh vực</a></li>
            <li class="{{ Route::is('HomeHTP.newWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.newWebPay')}}">Tin tức</a></li>
            <li class="{{ Route::is('HomeHTP.productCodWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.homeWebPay')}}">Tuyển dụng</a></li>
            <li class="{{ Route::is('HomeHTP.contactWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.contactWebPay')}}">liên hệ</a></li>
        </ul>
    </div>
    <div class="nav-right flex-div">
        <ul>
            <li><img src="{{asset('themes/htp_group_html/images/en-flag.png')}}" alt=""></li>
            <li><img src="{{asset('themes/htp_group_html/images/Line 11.jpg')}}" alt="" class="line-space"></li>
            <li class="flag-vi"><img src="{{asset('themes/htp_group_html/images/vi-flag.png')}}" alt=""></li>
        </ul>
    </div>
</nav>
@yield('content')
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 icon-social">
                <a href="">
                    <img src="{{asset('themes/htp_group_html/images/icon/facebook.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('themes/htp_group_html/images/icon/youtube.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{asset('themes/htp_group_html/images/icon/instagram.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 newsletter">
                <a href=""><img src="{{asset('themes/htp_group_html/images/icon/htp_logo.png')}}" alt="" class="logo mb-3"></a>
                <p>2022 HTP Group</p>
                <p>
                    Số A7 Lô A, Khu 5.2 ha, dự án nhà ở cho cán bộ cao cấp và cán bộ của Ban Đảng Trung Ương, <br> Phường Yên Hoà, Quận Cầu Giấy.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 category-footer">
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Lĩnh vực</a></li>
                    <li><a href="">Tin tức</a></li>
                    <li><a href="">Tuyển dụng</a></li>
                    <li><a href="">liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('themes/htp_group_html/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('themes/htp_group_html/js/main.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#imgHomeLogo").click(function(){
            location.href = "{{route('HomeHTP.homeWebPay')}}";
        });
    });
</script>
@yield('script')
</body>
</html>

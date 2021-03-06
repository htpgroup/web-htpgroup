<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HTP Group</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('themes/htp_group_html/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('themes/htp_group_html/css/custom.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('themes/htp_group_html/images/favicon.ico')}}" />
    <link rel="icon"  href="{{asset('themes/htp_group_html/images/favicon.ico')}}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('frontend.includes.meta')

    @yield('style')
    <link href="{{asset('themes/htp_group_html/css/bootstrap.min.css')}}" rel="stylesheet">

    <script src="{{asset('themes/library/lazysizes/lazysizes.min.js')}}" async=""></script>
    @if(Request::get('send_job'))
        <script src="https://unpkg.com/mithril/mithril.js"></script>
    @endif

    <x-google-analytics />
</head>
<body>
<nav class="flex-div">
    <div class="nav-left flex-div">
        <div class="icon-menu-mobile">
            <img src="{{asset('themes/htp_group_html/images/menu/menu.png')}}" alt="icon" width="30">
        </div>
        <div class="menu-mobile"></div>
        <img src="https://htpgroup.com.vn/themes/htp_group_html/images/menu.png" alt="menu" class="menu-icon-mobile" data-pagespeed-url-hash="1922647615" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        <div class="menu-mobile-cancel hide"></div>
        <img src="https://htpgroup.com.vn/themes/htp_group_html/images/icon/htp_logo.png" id="imgHomeLogo" alt="" class="logo" data-pagespeed-url-hash="1644643994" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
    </div>
    <div class="nav-middle">
        <ul>
            <li class="{{ Route::is('HomeHTP.homeWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.homeWebPay')}}">Trang ch???</a></li>
            <li class="{{ Route::is('HomeHTP.aboutWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.aboutWebPay')}}">Gi???i thi???u</a></li>
            <li class="{{ Route::is('HomeHTP.productWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.productWebPay')}}">L??nh v???c ho???t ?????ng</a></li>
            <li class="{{ Route::is('HomeHTP.newWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.newWebPay')}}">Tin t???c</a></li>
            <li class="{{ Route::is('HomeHTP.recruitmentWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.recruitmentWebPay')}}">Tuy???n d???ng</a></li>
            <li class="{{ Route::is('HomeHTP.contactWebPay') ? 'active' : null }}"><a href="{{route('HomeHTP.contactWebPay')}}">li??n h???</a></li>
        </ul>
    </div>
    <div class="close-menu-mobile">
        <img src="{{asset('themes/htp_group_html/images/menu/close.png')}}" alt="icon" width="30">
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
                <a href="{{ setting('facebook_url') }}">
                    <img src="{{asset('themes/htp_group_html/images/icon/facebook.png')}}" alt="">
                </a>
                <a href="{{ setting('youtube_url') }}">
                    <img src="{{asset('themes/htp_group_html/images/icon/youtube.png')}}" alt="">
                </a>
                <a href="{{ setting('instagram_url') }}">
                    <img src="{{asset('themes/htp_group_html/images/icon/instagram.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 newsletter">
                <a href=""><img src="{{asset('themes/htp_group_html/images/icon/htp_logo.png')}}" alt="" class="logo mb-3"></a>
                <p>2022 HTP Group</p>
                <p>
                    S??? A7 L?? A, Khu 5.2 ha - d??? ??n nh?? ??? cho c??n b??? cao c???p v?? c??n b??? c???a Ban ?????ng Trung ????ng, <br> P.Y??n Ho?? - Q.C???u Gi???y - H?? N???i - Vi???t Nam
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 category-footer">
                <ul>
                    <li><a href="{{route('HomeHTP.homeWebPay')}}">Trang ch???</a></li>
                    <li><a href="{{route('HomeHTP.aboutWebPay')}}">Gi???i thi???u</a></li>
                    <li><a href="{{route('HomeHTP.productWebPay')}}">L??nh v???c</a></li>
                    <li><a href="{{route('HomeHTP.newWebPay')}}">Tin t???c</a></li>
                    <li><a href="{{route('HomeHTP.recruitmentWebPay')}}">Tuy???n d???ng</a></li>
                    <li><a href="{{route('HomeHTP.contactWebPay')}}">Li??n h???</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('themes/htp_group_html/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('themes/htp_group_html/js/main.js')}}"></script>
<script src="{{asset('themes/htp_group_html/js/custom.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#imgHomeLogo").click(function(){
            location.href = "{{route('HomeHTP.homeWebPay')}}";
        });
    });
</script>
@yield('script')
@yield('script2')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>OmiPay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{asset_cdn('themes/shuffle/zeus/public/bootstrap-css/bootstrap/bootstrap.min.css')}}">
    <link rel="icon" href="https://res.cloudinary.com/hetssxsdf/image/upload/v1645668983/samples/Screenshot_1_xyteti.png">
    @yield('style')
</head>
<body>
<div class="">

    @yield('content')

</div>
<script src="{{asset_cdn('themes/shuffle/zeus/public/bootstrap-js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset_cdn('themes/shuffle/zeus/public/bootstrap-js/main.js')}}"></script>
@yield('script')
</body>
</html>

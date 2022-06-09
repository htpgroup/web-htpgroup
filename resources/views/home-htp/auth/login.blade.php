@extends('home-htp.layouts.auth')

@section('content')
<section class="position-relative py-20">
    <img class="d-none lazyload d-lg-block position-absolute top-0 start-0 mt-16" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/icons/dots/blue-dot-left-bars.svg')}}" alt="">
    <img class="d-none lazyload d-lg-block position-absolute bottom-0 end-0 mb-16" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/icons/dots/yellow-dot-right-shield.svg')}}" alt="">
    <div class="container">
        <div class="max-w-md mx-auto p-6 px-lg-10 py-lg-12 bg-white text-center border rounded">
            <form action="#">
                <span class="d-inline-block mb-3 small text-info fw-bold">Đăng nhập</span>
                <h3 class="mb-12">Đăng ký tài khoản</h3>
                <div class="position-relative mb-6">
                    <input class="form-control" type="email" placeholder="e.g hello@omipay.vn">
                    <span class="position-absolute start-0 top-0 ms-3 mt-n2 px-1 bg-white text-muted small">Địa chỉ email</span>
                </div>
                <div class="position-relative mb-6">
                    <input class="form-control" type="password" placeholder="******">
                    <span class="position-absolute start-0 top-0 ms-3 mt-n2 px-1 bg-white text-muted small">Mật khẩu</span>
                </div>
                <button class="btn btn-primary mb-4 w-100">Bắt đầu</button>
                <a class="link-dark" style="font-size: 14px;" href="{{route('HomePay.homeWebPay')}}">Quên mật khẩu?</a>
                <div class="border-top pt-6 mt-8">
                    <a class="btn btn-dark btn-block w-100 mb-4" href="{{route('HomePay.homeWebPay')}}">
            <span class="d-inline-block me-2">
              <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.0898 11.8182V6.51074H5.90537L6.17776 4.4417H4.0898V3.12092C4.0898 2.52207 4.25864 2.11397 5.13515 2.11397L6.25125 2.11352V0.262891C6.05824 0.238289 5.39569 0.181885 4.62456 0.181885C3.01431 0.181885 1.9119 1.14594 1.9119 2.91601V4.4417H0.0908203V6.51074H1.9119V11.8182H4.0898Z" fill="white"></path>
              </svg>
            </span>
                        <span class="text-white" style="font-size: 14px;">Đăng nhập qua Facebook</span>
                    </a>
                    <a class="btn btn-info btn-block w-100" href="{{route('HomePay.homeWebPay')}}">
            <span class="d-inline-block me-2">
              <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5455 2.0974C12.0904 2.29904 11.6022 2.43579 11.0892 2.49684C11.613 2.18316 12.014 1.68562 12.204 1.09459C11.7127 1.38508 11.1703 1.59601 10.5924 1.71035C10.1296 1.21667 9.47138 0.90918 8.74128 0.90918C7.34059 0.90918 6.20489 2.04488 6.20489 3.4448C6.20489 3.64334 6.2273 3.83726 6.27057 4.0227C4.16298 3.91684 2.29411 2.90708 1.0433 1.37272C0.824652 1.74665 0.700269 2.18237 0.700269 2.64748C0.700269 3.52746 1.14837 4.30391 1.82825 4.75817C1.41259 4.74427 1.02166 4.62993 0.67942 4.43987V4.47154C0.67942 5.69995 1.55399 6.72516 2.71362 6.95849C2.50116 7.01567 2.27712 7.04734 2.04534 7.04734C1.88156 7.04734 1.72318 7.03112 1.56788 7.00021C1.89081 8.00843 2.8272 8.74161 3.93663 8.76171C3.06902 9.44159 1.97504 9.84565 0.786814 9.84565C0.582087 9.84565 0.38043 9.83328 0.181885 9.81088C1.30445 10.5317 2.63716 10.952 4.06952 10.952C8.73514 10.952 11.2854 7.08752 11.2854 3.73607L11.2769 3.40773C11.7752 3.05231 12.2063 2.60577 12.5455 2.0974Z" fill="white"></path>
              </svg>
            </span>
                        <span class="text-white" style="font-size: 14px;">Đăng nhập qua Twitter</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@extends('home-htp.layouts.page')

@section('content')

    <section class="position-relative overflow-hidden py-20">
        <div class="container">
            <div class="max-w-2xl mx-auto mb-20 text-center">
                <h3 class="mt-8 mb-10">Tin tức</h3>
            </div>
            <div class="row mb-10">
                <p class="lead text-muted fw-bold">Tin thị trường</p>
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                    <div class="p-6 border rounded">
                        <div class="position-relative mb-6" style="height: 216px;">
                            <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                        </div>
                        <h3 class="mb-4 h5">Ví điện tử 'bùng nổ' mạnh mẽ nhờ dịch COVID-19</h3>
                        <p class="mb-4 text-muted">Trong khi hàng loạt ngành hàng chịu ảnh hưởng nặng nề bởi dịch COVID-19 thì thanh toán điện tử (E-payment) nói chung và ví điện tử (E-wallet)
                            nói riêng lại có cơ hội bứt phá vượt trội</p>
                        <a class="h6" href="{{route('HomePay.newShowWebPay')}}">Xem nội dung</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                    <div class="p-6 border rounded">
                        <div class="position-relative mb-6" style="height: 216px;">
                            <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                        </div>
                        <h3 class="mb-4 h5">Thanh toán ví điện tử có an toàn?</h3>
                        <p class="mb-4 text-muted">Các chuyên gia tài chính đều khẳng định sử dụng ví điện tử đáp ứng các tiêu chuẩn bảo mật cao cấp như PCI DSS, Tokenization, 3D-Secure... là giải pháp an toàn bậc nhất cho tiền của bạn.</p>
                        <a class="h6" href="{{route('HomePay.newShowWebPay')}}">Xem nội dung</a>
                    </div>
                </div>

                <br>
                <p class="lead text-muted fw-bold">Tin khuyến mãi</p>
                @if(false)
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                    <div class="p-6 border rounded">
                        <div class="position-relative mb-6" style="height: 216px;">
                            <span class="position-absolute top-0 end-0 mt-4 me-4 badge bg-dark text-uppercase">Giải pháp</span>
                            <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                        </div>
                        <h3 class="mb-4 h5">Ra mắt dịch vụ mới</h2>
                        <p class="mb-4 text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
                        <a class="h6" href="{{route('HomePay.newShowWebPay')}}">Xem nội dung</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                    <div class="p-6 border rounded">
                        <div class="position-relative mb-6" style="height: 216px;">
                            <span class="position-absolute top-0 end-0 mt-4 me-4 badge bg-dark text-uppercase">Giải pháp</span>
                            <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                        </div>
                        <h3 class="mb-4 h5">Ra mắt dịch vụ mới</h2>
                        <p class="mb-4 text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
                        <a class="h6" href="{{route('HomePay.newShowWebPay')}}">Xem nội dung</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                    <div class="p-6 border rounded">
                        <div class="position-relative mb-6" style="height: 216px;">
                            <span class="position-absolute top-0 end-0 mt-4 me-4 badge bg-dark text-uppercase">Giải pháp</span>
                            <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                        </div>
                        <h3 class="mb-4 h5">Ra mắt dịch vụ mới</h2>
                        <p class="mb-4 text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
                        <a class="h6" href="{{route('HomePay.newShowWebPay')}}">Xem nội dung</a>
                    </div>
                </div>
                <div class="text-left"><a href="{{route('HomePay.newShowWebPay')}}">Xem thêm...</a></div>
                @endif

                <p class="lead text-muted fw-bold">Tin nội bộ</p>
                @if(false)
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                    <div class="p-6 border rounded">
                        <div class="position-relative mb-6" style="height: 216px;">
                            <span class="position-absolute top-0 end-0 mt-4 me-4 badge bg-dark text-uppercase">Giải pháp</span>
                            <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                        </div>
                        <h3 class="mb-4 h5">Ra mắt dịch vụ mới</h2>
                        <p class="mb-4 text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
                        <a class="h6" href="{{route('HomePay.newShowWebPay')}}">Xem nội dung</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                    <div class="p-6 border rounded">
                        <div class="position-relative mb-6" style="height: 216px;">
                            <span class="position-absolute top-0 end-0 mt-4 me-4 badge bg-dark text-uppercase">Giải pháp</span>
                            <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                        </div>
                        <h3 class="mb-4 h5">Ra mắt dịch vụ mới</h2>
                        <p class="mb-4 text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
                        <a class="h6" href="{{route('HomePay.newShowWebPay')}}">Xem nội dung</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                    <div class="p-6 border rounded">
                        <div class="position-relative mb-6" style="height: 216px;">
                            <span class="position-absolute top-0 end-0 mt-4 me-4 badge bg-dark text-uppercase">Giải pháp</span>
                            <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                        </div>
                        <h3 class="mb-4 h5">Ra mắt dịch vụ mới</h2>
                        <p class="mb-4 text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
                        <a class="h6" href="{{route('HomePay.newShowWebPay')}}">Xem nội dung</a>
                    </div>
                </div>
                <div class="text-left"><a href="{{route('HomePay.newShowWebPay')}}">Xem thêm...</a></div>
                @endif
            </div>
        </div>
    </section>


@endsection

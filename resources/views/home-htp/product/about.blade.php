@extends('home-htp.layouts.base')

@section('content')

      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
              <ul class="list-unstyled">
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-muted h4 ps-4" href="{{route('HomePay.homeWebPay')}}">Giới Thiệu</a></li>
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-muted h4 ps-4" href="{{route('HomePay.homeWebPay')}}">Đối Tác &amp; Khách Hàng</a></li>
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-dark h4 ps-4 border-start border-info" href="{{route('HomePay.homeWebPay')}}">Chứng Chỉ &amp; Giấy Phép</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="mt-8 mb-10">Giấy phép trung gian thanh toán của ngân hàng nhà nước</h2>
                <p class="lead text-muted">OmiPay chính thức được Ngân hàng nhà nước Việt Nam cấp giấy phép số....</p>
              </div>
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="mt-8 mb-10">Chứng chỉ bảo mật</h2>
              </div>
              <div class="row">
                <div class="col-12 col-lg-8">
                  <h3 class="mb-4 h3 font-semibold font-heading">Giấy chứng nhận tuân thủ PCI DSS</h3>
                  <p class="mb-4 text-muted">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </div>
                <div class="col-12 col-lg-4 mb-6 mb-lg-0">
                  <div style="height: 10rem;">
                    <img class="d-block lazyload rounded w-100 h-100" style="object-fit: cover;" src="https://images.unsplash.com/photo-1544717305-996b815c338c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-8">
                  <h3 class="mb-4 h3 font-semibold font-heading">Chứng chỉ TLS</h3>
                  <p class="mb-4 text-muted">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </div>
                <div class="col-12 col-lg-4 mb-6 mb-lg-0">
                  <div style="height: 10rem;">
                    <img class="d-block lazyload rounded w-100 h-100" style="object-fit: cover;" src="https://images.unsplash.com/photo-1544717305-996b815c338c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt="">
                  </div>
                </div>
              </div>
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="mt-8 mb-10">Cơ sở hạ tầng</h2>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/slack-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/spotify-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/amazon-gray.svg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
              <ul class="list-unstyled">
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-muted h4 ps-4" href="{{route('HomePay.homeWebPay')}}">Giới Thiệu</a></li>
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-dark h4 ps-4 border-start border-info" href="{{route('HomePay.homeWebPay')}}">Đối Tác &amp; Khách Hàng</a></li>
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-muted h4 ps-4" href="{{route('HomePay.homeWebPay')}}">Chứng Chỉ &amp; Giấy Phép</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h2 class="mt-8 mb-10">Mạng Lưới Xử Lý Thanh Toán</h2>
              </div>
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="mt-8 mb-10">Tổ Chức Thẻ Quốc Tế</h2>
                <p class="lead text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/slack-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/spotify-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/amazon-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/netflix-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/stripe-gray.svg')}}" alt="">
                  </div>
                </div>
              </div>
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="mt-8 mb-10">Ngân Hàng Nội Địa Tại Việt Nam</h2>
                <p class="lead text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/slack-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/spotify-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/amazon-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/netflix-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/stripe-gray.svg')}}" alt="">
                  </div>
                </div>
              </div>
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="mt-8 mb-10">Khách Hàng</h2>
                <p class="lead text-muted">Những Doanh Nghiệp Đầu Ngành Đã Lựa Chọn Chúng Tôi</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/slack-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/spotify-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/amazon-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/netflix-gray.svg')}}" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2 p-4">
                  <div class="bg-light rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 24px;" src="{{asset_cdn('themes/shuffle/zeus/public/zeus-assets/logo/stripe-gray.svg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
              <ul class="list-unstyled">
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-dark h4 ps-4 border-start border-info" href="{{route('HomePay.homeWebPay')}}">Giới Thiệu</a></li>
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-muted h4 ps-4" href="{{route('HomePay.homeWebPay')}}">Đối Tác &amp; Khách Hàng</a></li>
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-muted h4 ps-4" href="{{route('HomePay.homeWebPay')}}">Chứng Chỉ &amp; Giấy Phép</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h2 class="mt-8 mb-10">Hành Trình Phát Triển</h2>
              </div>
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                  <div class="p-6 pb-12 border rounded text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" style="width: 320px; height: 320px; object-fit: cover;" src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                  <div class="p-6 pb-12 border rounded text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" style="width: 320px; height: 320px; object-fit: cover;" src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-6">
                  <div class="p-6 pb-12 border rounded text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" style="width: 320px; height: 320px; object-fit: cover;" src="https://images.unsplash.com/photo-1525129498994-580709352e20?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                  </div>
                </div>
              </div>
              <div class="row mb-16">
                <div class="col-12 col-lg-7 mb-8 mb-lg-0">
                  <div style="height: 384px;">
                    <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1557804506-d8017c1e4856?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1001&amp;q=80" alt="">
                  </div>
                </div>
                <div class="col-12 col-lg-5 d-flex align-items-center">
                  <div class="ps-lg-10">
                    <h2 class="mt-3 mb-4 h3">Tầm nhìn</h2>
                    <p class="lead text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
                  </div>
                </div>
              </div>
              <div class="row mb-16">
                <div class="col-12 col-lg-5 d-flex align-items-center">
                  <div class="pe-lg-10">
                    <h2 class="mt-3 mb-4 h3">Sứ mệnh</h2>
                    <p class="lead text-muted">Thanh toán trực tuyến các dịch vụ công dễ dàng, nhanh chóng hơ</p>
                  </div>
                </div>
                <div class="order-first order-lg-last col-12 col-lg-7 mb-8 mb-lg-0">
                  <div style="height: 384px;">
                    <img class="w-100 h-100 rounded" style="object-fit: cover;" src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=967&amp;q=80" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection

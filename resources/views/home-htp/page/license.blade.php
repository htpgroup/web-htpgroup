@extends('home-htp.layouts.page')

@section('content')

      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
                @include('domain.home-pay.page.menu_about', ['menu_id' => 3])
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Giấy phép trung gian thanh toán của ngân hàng nhà nước</h3>
                <p class="lead text-muted">OmiPay chính thức được Ngân hàng nhà nước Việt Nam cấp giấy phép số 01/GP-NHNN, Ngày 07/01/2022</p>
              </div>
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Chứng chỉ bảo mật</h3>
              </div>
              <div class="row">
                <div class="col-12 col-lg-8">
                  <h4 class="mb-4 h3 font-semibold font-heading colorCustomer">Giấy chứng nhận tuân thủ PCI DSS</h4>
                  <p class="mb-4 text-muted">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </div>
                <div class="col-12 col-lg-4 mb-6 mb-lg-0">
                  <div style="height: 10rem;">
                    <img class="d-block lazyload rounded w-100 h-100" style="object-fit: cover;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648179354/samples/omipay/about/image_27_gmyaaw.png" alt="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-8">
                  <h4 class="mb-4 h3 font-semibold font-heading colorCustomer">Chứng chỉ TLS</h4>
                  <p class="mb-4 text-muted">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </div>
                <div class="col-12 col-lg-4 mb-6 mb-lg-0">
                  <div style="height: 10rem;">
                    <img class="d-block lazyload rounded w-100 h-100" style="object-fit: cover;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648179355/samples/omipay/about/Frame_6470_pxqvqw.png" alt="">
                  </div>
                </div>
              </div>
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="mt-8 mb-10 colorCustomer">Cơ sở hạ tầng</h2>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 col-lg-4 p-4">
                  <div class="rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 100%; width: 100%" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648179355/samples/omipay/about/Frame_6464_wwnnuk.png" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 p-4">
                  <div class="rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 100%; width: 100%;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648179355/samples/omipay/about/Frame_6465_vawwat.png" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 p-4">
                  <div class="rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 100%; width: 100%;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648179355/samples/omipay/about/Frame_6466_joju5o.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@endsection

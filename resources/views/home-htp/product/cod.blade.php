@extends('home-htp.layouts.page')

@section('content')


      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
                @include('domain.home-pay.product.menu_product', ['menu_id' => 3])
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h2 class="mt-8 mb-2 colorCustomer">Trải nghiệm tiện ích </h2>
                <h2 class="mt-8 mb-10 colorCustomer">dịch vụ thu hộ - chi hộ</h2>
              </div>

                <div class="row align-items-center">
                    <div class="col-12 col-lg-12 mb-12 mb-lg-0">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-4 colorCustomer">
                                    <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714519/samples/omipay/image/Group_6646_bvmkqs.png" alt=""> Phục vụ 24/7</h6></div>
                            <div class="col-md-6"><h5 class="mb-4 colorCustomer">
                                    <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714586/samples/omipay/image/Group_6648_mjzcbb.png" alt=""> Dễ dàng tích hợp đa kênh</h5></div>

                            <div class="col-md-6">
                                <h6 class="mb-4 colorCustomer">
                                    <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714633/samples/omipay/image/Group_6647_wsl1kq.png" alt=""> Giao dịch nhanh chóng, chính xác</h6></div>
                            <div class="col-md-6"> <h6 class="mb-4 colorCustomer">
                                    <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714697/samples/omipay/image/Group_6650_jziagt.png" alt=""> Theo dõi thời gian thực</h6></div>

                            <div class="col-md-6">
                                <h6 class="mb-4 colorCustomer">
                                    <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714759/samples/omipay/image/Group_6649_g7gwa1.png" alt=""> An toàn, bảo mật</h6></div>
                            <div class="col-md-6">
                                <h6 class="mb-4 colorCustomer">
                                    <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714791/samples/omipay/image/Group_6651_i2t4ty.png" alt=""> Tiết kiệm thời gian - chi phí - nhân lực</h6></div>
                        </div>
                    </div>

                </div>
              <div class="max-w-3xl mx-auto mt-20 mb-12 mb-lg-20 text-center">
                <h2 class="mt-8 mb-10 colorCustomer">Dịch vụ hỗ trợ thu hộ</h2>

              </div>
              <div class="row">
                <div class="col-12 col-lg-12 mb-16 mb-lg-0">
                  <div class="mb-10">
                    <img class="img-fluid lazyload w-100 rounded" style="object-fit: cover;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648795521/Virtual_Account_ogedxd.png" alt="">
                  </div>
                  <p class="mb-4 lead text-muted text-center">Thu hộ</p>
                  <p class="mb-4 lead text-muted text-center">qua tài khoản định danh</p>
                </div>
                <div class="col-12 col-lg-12 mb-16 mb-lg-0">
                  <div class="mb-10">
                    <img class="img-fluid lazyload w-100 rounded" style=" object-fit: cover;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648795523/Online_ATM_furkf4.png" alt="">
                  </div>
                  <p class="mb-4 lead text-muted text-center">Thu hộ</p>
                  <p class="mb-4 lead text-muted text-center">qua cổng thanh toán</p>
                </div>

              </div>
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h2 class="mt-8 mb-10 colorCustomer">Dịch vụ hỗ trợ chi hộ</h2>
              </div>
              <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                  <div class="p-6 pb-12   text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648713848/samples/Frame_6632_hdc3og.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@endsection

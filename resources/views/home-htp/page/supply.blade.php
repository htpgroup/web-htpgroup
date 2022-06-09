@extends('home-htp.layouts.page')
@section('style')
    <style>
        .colorCustomer{
            color: #DB0069 !important;
        }
    </style>
@endsection
@section('content')


      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
                @include('domain.home-pay.page.menu_about', ['menu_id' => 2])
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h2 class="mt-8 mb-10 colorCustomer">Mạng lưới xử lý thanh toán</h2>
              </div>
                @if(false)
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Tổ chức thẻ quốc tế</h3>
                <p class="lead text-muted">Kết nối với 5 tổ chức thẻ quốc tế để vận hành và xử lý giao dịch toàn cầu!.</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 col-lg-4 p-4">
                  <div class="rounded py-2">
                    <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175920/samples/omipay/about/Frame_6469_jjdeqt.png" alt="">
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 p-4">
                  <div class=" rounded py-2">
                    <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175920/samples/omipay/about/Frame_6470_shh0ma.png" alt="">
                  </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 p-4">
                  <div class=" rounded py-2">
                    <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175920/samples/omipay/about/Frame_6471_znybxn.png" alt="">
                  </div>
                </div>
              </div>


                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 p-4">
                        <div class=" rounded py-2">
                            <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648177398/samples/omipay/about/Frame_6472_ynibsu.png" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4 p-4">
                        <div class=" rounded py-2">
                            <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648177431/samples/omipay/about/Frame_6473_aygky7.png" alt="">
                        </div>
                    </div>
                </div>
                @endif
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Ngân hàng nội địa tại Việt Nam</h3>
                <p class="lead text-muted">Kết nối với 39 ngân hàng nội địa để triển khai đa dạng tiện ích thanh toán cho chủ thẻ trong nước!.</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 col-lg-3 p-2">
                  <div class="rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175920/samples/omipay/about/image_11_iheel6.png" alt="">
                  </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                  <div class="rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175920/samples/omipay/about/image_12_bvpr7u.png" alt="">
                  </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                  <div class="rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175919/samples/omipay/about/image_13_l5bx0m.png" alt="">
                  </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                  <div class="rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175919/samples/omipay/about/image_14_b4ujg7.png" alt="">
                  </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                  <div class="rounded py-5">
                    <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175919/samples/omipay/about/image_15_gmsuod.png" alt="">
                  </div>
                </div>

                  <div class="col-12 col-md-4 col-lg-3 p-2">
                      <div class="rounded py-5">
                          <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175919/samples/omipay/about/image_16_ixtvm8.png" alt="">
                      </div>
                  </div>

                  <div class="col-12 col-md-4 col-lg-3 p-2">
                      <div class="rounded py-5">
                          <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175919/samples/omipay/about/image_17_l9kbjf.png" alt="">
                      </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 p-2">
                      <div class="rounded py-5">
                          <img class="d-block lazyload mx-auto" style="height: 74px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648175919/samples/omipay/about/image_18_qttwub.png" alt="">
                      </div>
                  </div>
              </div>
              <div class="max-w-3xl mx-auto mb-16 text-center">
                <h2 class="mt-8 mb-10 colorCustomer">Khách hàng</h2>
                <p class="lead text-muted colorCustomer">Những doanh nghiệp đầu ngành đã lựa chọn chúng tôi</p>
              </div>
              <div class="row">
                <div class="col-12 col-md-4 col-lg-3 p-4">
                  <div class="rounded py-12">
                    <img class="d-block lazyload mx-auto" style="height: 94px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648178145/samples/omipay/about/Frame_6469_te9ozn.png" alt="">
                  </div>
                </div>
                  <div class="col-12 col-md-4 col-lg-3 p-4">
                      <div class="rounded py-12">
                          <img class="d-block lazyload mx-auto" style="height: 94px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648178145/samples/omipay/about/Frame_6470_yldyxv.png" alt="">
                      </div>
                  </div>

                  <div class="col-12 col-md-4 col-lg-3 p-4">
                      <div class="rounded py-12">
                          <img class="d-block lazyload mx-auto" style="height: 94px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648178145/samples/omipay/about/Frame_6471_chhal3.png" alt="">
                      </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 p-4">
                      <div class="rounded py-12">
                          <img class="d-block lazyload mx-auto" style="height: 94px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648178145/samples/omipay/about/Frame_6472_lsjcqi.png" alt="">
                      </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 p-4">
                  <div class="rounded py-2">
                      <img class="d-block lazyload mx-auto" style="height: 94px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648178822/samples/omipay/about/Frame_6473_uq5f9g.png" alt="">
                  </div>
                  </div>

                  <div class="col-12 col-md-4 col-lg-3 p-4">
                      <div class="rounded py-2">
                          <img class="d-block lazyload mx-auto" style="height: 94px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648178797/samples/omipay/about/Frame_6474_i74pwv.png" alt="">
                      </div>
                  </div>

                  <div class="col-12 col-md-4 col-lg-3 p-4">
                      <div class="rounded py-2">
                          <img class="d-block lazyload mx-auto" style="height: 94px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648178145/samples/omipay/about/Frame_6475_mk37j5.png" alt="">
                      </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 p-4">
                      <div class="rounded py-2">
                          <img class="d-block lazyload mx-auto" style="height: 94px;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648178145/samples/omipay/about/Frame_6476_duiql2.png" alt="">
                      </div>
                  </div>
              </div>

            </div>
          </div>
        </div>
      </section>


@endsection

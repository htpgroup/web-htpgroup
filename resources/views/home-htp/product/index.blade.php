@extends('home-htp.layouts.page', ['page' =>2])

@section('content')

      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
                @include('domain.home-pay.product.menu_product', ['menu_id' => 1])
            </div>
            <div class="col-12 col-lg-8">
              <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                  <div class="p-6 pb-12  rounded text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648702126/samples/Group_6663_ie4lbh.png" alt="">
                  </div>
                </div>
              </div>
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h3 class="mt-8 mb-2 colorCustomer">Cổng thanh toán trực tuyến</h3>
                  <p style="display: none">Hỗ trợ kênh thanh toán bằng thẻ tín dụng/ghi nợ Quốc tế và ATM nội địa!</p>
              </div>
              <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                  <div class="p-6 pb-12  rounded text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" style="width: 320px; height: 320px; object-fit: cover;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648180837/samples/omipay/about/672_Converted_-01_2_nmcsl8.png" alt="">
                  </div>
                </div>
                <div class="col-12 col-lg-6 mb-12 mb-lg-0">
                  <div>
                    <h4 class="mb-4 colorCustomer">Đa dạng nền tảng</h4>
                    <p class="text-muted">Hỗ trợ giao diện tương thích trên mọi trình duyệt, máy tính và thiết bị di động.</p>
                    <h4 class="mb-4 colorCustomer">Phương thức thanh toán hỗ trợ</h4>
                    <p class="text-muted">Hỗ trợ hệ điều hành Android và IOS.</p>
                    <p class="text-muted">Giao diện thanh toán trên In-App.</p>
                    <h4 class="mb-4 colorCustomer">Hướng dẫn tích hợp</h4>
                    <p class="text-muted">Tạo đường link thanh toán và gửi cho khách hàng của bạn qua mail, ứng dụng chat,...</p>
                  </div>
                </div>
              </div>
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h2 class="mt-8 mb-10 colorCustomer">Giải pháp thanh toán</h2>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-lg-12 mb-12 mb-lg-0">
                  <div class="row">
                      <div class="col-md-6">
                          <h6 class="mb-4 colorCustomer">
                              <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714860/samples/omipay/image/clarity_world-line_nidkyp.png" alt=""> Thanh toán ATM nội địa</h6></div>
                      <div class="col-md-6">
                          <h6 class="mb-4 colorCustomer">
                              <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714902/samples/omipay/image/clarity_world-line_mpuza8.png" alt=""> Thanh toán thẻ Quốc tế</h6></div>
                      <div class="col-md-6">  <h6 class="mb-4 colorCustomer">
                              <img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714936/samples/omipay/image/clarity_world-line_hhylue.png" alt=""> Thanh toán ví OmiPay</h6></div>
                      <div class="col-md-6"> <h6 class="mb-4 colorCustomer"><img class="lazyload" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648714966/samples/omipay/image/clarity_world-line_jhquwd.png" alt=""> Thanh toán trả góp</h6></div>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="p-6 pb-12   text-center">
                      <div class="col-md-12"> <h5 class="mb-4">  Hỗ trợ 39 ngân hàng</h5></div>
                      <div class="col-md-12"><h5 class="mb-4">  Website / Ứng dụng / Hóa đơn / Cửa hàng</h5></div>
                  </div>
                </div>
              </div>

              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Hướng dẫn tích hợp</h3>
              </div>
              <div class="row align-items-center">
                <div>
                  <h5 class="mb-4 colorCustomer">Bước 1: Ký hợp đồng với OmiPay</h5>
                    <p>Quý khách vui lòng liên hệ OmiPay để ký kết hợp đồng hợp tác</p>
                  <h5 class="mb-4 colorCustomer">Bước 2: Kích hoạt cổng thanh toán OmiPay cho merchant</h5>
                    <p>Hướng dẫn tích hợp theo file đính kèm</p>
                    <a href="https://firebasestorage.googleapis.com/v0/b/devomipay.appspot.com/o/CheckoutV1_1702.pdf?alt=media&token=4e66d8f3-0df3-44da-ad93-1c7aa97a4ff7" class="btn btn-primary btn-sm mb-3">
                        <img class="small" width="15" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648793922/Vector_sxjmix.png" alt=""> Tải file đính kèm</a>
                    <br>
                    <h5 class="mb-4 colorCustomer">Bước 3: Kiểm tra đặt hàng và thanh toán</h5>
                    <p>Sau khi tích hợp thành công hình thức thanh toán OmiPay vào merchant site.
                        Phương thức thanh toán qua cổng thanh toán OmiPay sẽ được hiển thị khi khách hàng thực hiện đến bước đặt hàng và thanh toán.</p>
                    <h5 class="mb-4 colorCustomer">Bước 4: Kiểm tra giao dịch</h5>
                    <p>Khi có đơn hàng được thanh toán, quản trị website có thể truy cập vào hệ thống tra cứu của OmiPay để kiểm tra giao dịch.</p>


                </div>
              </div>
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Liên hệ ngay để được hỗ trợ</h3>
              </div>
              <div class="row align-items-center">
                <div>
                  <img class="img-fluid lazyload mx-auto mb-6 rounded" style="width: 640px; object-fit: cover;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648794179/Group_6597_oq0hvn.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection

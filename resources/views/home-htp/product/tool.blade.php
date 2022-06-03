@extends('home-htp.layouts.page')

@section('content')

      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
                @include('domain.home-pay.product.menu_product', ['menu_id' => 4])
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Công cụ hỗ trợ linh hoạt</h3>
              </div>
              <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                  <div class="p-6 pb-12 rounded text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" style="width: 320px; height: 320px; object-fit: cover;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648188959/searching-01_1_ihv4zn.png" alt="">
                  </div>
                </div>
                <div class="col-12 mt-5 col-lg-6 mb-12 mb-lg-0">
                  <div>
                    <h5 class="mb-4 colorCustomer">Tìm kiếm</h5>
                    <p class="text-muted">Tìm kiếm giao dịch để kiểm tra, xác nhận, hỗ trợ khách hàng của bạn.</p>
                    <p class="text-muted">Tìm kiếm giao dịch theo ngày, mã đơn hàng,...</p>
                    <h5 class="mb-4 colorCustomer">Báo cáo giao dịch</h5>
                    <p class="text-muted">Tải dữ liệu giao dịch theo thời gian</p>
                    <p class="text-muted">Phân loại và thống kê giao dịch.</p>
                    <h5 class="mb-4 colorCustomer">Đối soát</h5>
                    <p class="text-muted">Hỗ trợ đối soát hàng ngày</p>
                    <p class="text-muted">Cung câp chức năng hoàn tiền</p>
                  </div>
                </div>
              </div>
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Bảo đảm rủi ro</h3>
              </div>
                <div class="row align-items-center">

                    <div class="col-12 mt-5 col-lg-6 mb-12 mb-lg-0">
                        <div>
                            <h5 class="mb-4 colorCustomer">Liên tục</h5>
                            <p class="text-muted">Tự động quét và cảnh báo hàng ngày các giao dịch nghi vấn giả mạo</p>
                            <h5 class="mb-4 colorCustomer">An toàn</h5>
                            <p class="text-muted">Tự động đánh giá mức độ rủi ro cho mỗi giao dịch</p>
                            <h5 class="mb-4 colorCustomer">Kinh nghiệm</h5>
                            <p class="text-muted">Đội ngũ nhân viên có kinh nghiệm quản lý rủi ro dày dặn</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="p-6 pb-12 rounded text-center">
                            <img class="img-fluid lazyload mx-auto mb-6 rounded" style="width: 320px; height: 320px; object-fit: cover;" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648784902/omipay/icons_2-13_1_g2u9ku.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        </div>
      </section>


@endsection

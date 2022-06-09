@extends('home-htp.layouts.page')

@section('content')


      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
                @include('domain.home-pay.product.menu_product', ['menu_id' => 2])
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h2 class="mt-8 mb-10 colorCustomer">Cổng thanh toán trực tuyến</h2>
              </div>
              <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                  <div class="p-6 pb-12 border rounded text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" style="width: 320px; height: 320px; object-fit: cover;" src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                  </div>
                </div>
                <div class="col-12 col-lg-6 mb-12 mb-lg-0">
                  <div>
                    <h4 class="mb-4 colorCustomer">An toàn</h4>
                    <p class="text-muted">Hỗ trợ giao diện tương thích trên mọi trình duyệt, máy tính và thiết bị di động.</p>
                    <h4 class="mb-4 colorCustomer">Hỗ trợ đa nền tảng</h4>
                    <p class="text-muted">Hỗ trợ hệ điều hành Android và IOS.</p>
                    <p class="text-muted">Giao diện thanh toán trên In-App.</p>
                    <h4 class="mb-4 colorCustomer">Nâng cao trải nghiệm người dùng</h4>
                    <p class="text-muted">Tạo đường link thanh toán và gửi cho khách hàng của bạn qua mail, ứng dụng chat,...</p>
                    <h4 class="mb-4 colorCustomer">Lợi ích người dùng</h4>
                    <p class="text-muted">Thúc đẩy mua hàng -Giảm thiểu gian lận</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection

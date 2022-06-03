@extends('home-htp.layouts.page')

@section('content')

      <section class="position-relative py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 px-3 pt-10 pt-lg-20 pb-10">
                @include('domain.home-pay.product.menu_product', ['menu_id' => 5])
            </div>
            <div class="col-12 col-lg-8">
              <div class="max-w-3xl mx-auto mb-12 mb-lg-20 text-center">
                <h3 class="mt-8 mb-10 colorCustomer">Tokenization</h3>
              </div>
              <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                  <div class="p-6 pb-12 rounded text-center">
                    <img class="img-fluid lazyload mx-auto mb-6 rounded" src="https://res.cloudinary.com/hetssxsdf/image/upload/v1648803120/Frame_6632_jffofh.png" alt="">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        </div>
      </section>


@endsection

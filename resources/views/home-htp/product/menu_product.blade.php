<ul class="list-unstyled">
    <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a
            class="text-decoration-none {{$menu_id==1? 'text-dark':'text-muted'}} h4 ps-4 {{$menu_id==1? 'border-start border-info':''}}"
            href="{{route('HomePay.productWebPay')}}">Giải pháp thanh toán</a></li>
    <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a
            class="text-decoration-none {{$menu_id==5? 'text-dark':'text-muted'}} h4 ps-4 {{$menu_id==5? 'border-start border-info':''}}"
            href="{{route('HomePay.productExtendWebPay')}}">Giải pháp mở rộng</a></li>
    @if(false)
        <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a
                class="text-decoration-none {{$menu_id==2? 'text-dark':'text-muted'}}  h4 ps-4 {{$menu_id==2? 'border-start border-info':''}}"
                href="{{route('HomePay.productIntegratedWebPay')}}">Giải pháp mở rộng</a></li>
    @endif
    <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a
            class="text-decoration-none {{$menu_id==3? 'text-dark':'text-muted'}} h4 ps-4 {{$menu_id==3? 'border-start border-info':''}}"
            href="{{route('HomePay.productCodWebPay')}}">Thu hộ - chi hộ</a></li>
    <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a
            class="text-decoration-none {{$menu_id==4? 'text-dark':'text-muted'}} h4 ps-4 {{$menu_id==4? 'border-start border-info':''}}"
            href="{{route('HomePay.productToolWebPay')}}">Công cụ hỗ trợ</a></li>
</ul>

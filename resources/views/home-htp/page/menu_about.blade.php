<ul class="list-unstyled">
    <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none {{$menu_id==1? 'text-dark':'text-muted'}} h4 ps-4 {{$menu_id==1? 'border-start border-info':''}}" href="{{route('HomePay.aboutWebPay')}}">Giới Thiệu</a></li>
    <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none {{$menu_id==2? 'text-dark':'text-muted'}} h4 ps-4 {{$menu_id==2? 'border-start border-info':''}}" href="{{route('HomePay.supplyWebPay')}}">Đối Tác &amp; Khách Hàng</a></li>
    @if(false)
    <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none {{$menu_id==3? 'text-dark':'text-muted'}} h4 ps-4 {{$menu_id==3? 'border-start border-info':''}}" href="{{route('HomePay.licenseWebPay')}}">Chứng Chỉ &amp; Giấy Phép</a></li>
    @endif
</ul>

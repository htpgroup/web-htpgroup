@extends('home-htp.layouts.main')
@section('style')


    <style>
        .stackedit-button-wrapper img {
            width: 1.6em;
            height: 1.6em;
            vertical-align: bottom;
            margin-right: 0.33em;
        }

        .swal2-icon {
            height: 3rem !important;
            width: 3rem !important;
            border: none !important;
            margin: 0 !important;
        }

        .iconAlarm {
            height: 2rem !important;
        }

        .is-valid~.valid-feedback, .is-valid~.valid-tooltip, .was-validated :valid~.valid-feedback, .was-validated :valid~.valid-tooltip {
            display: block;
        }
        .valid-feedback{
            display: block;
        }
    </style>
@endsection
@section('content')
<!--slider-->
<div id="slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url({{asset('themes/htp_group_html/images/sliders/slider_1.jpg')}});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
            <div class="container">
                <h5>Thông minh - Tiện ích - Thân thiện</h5>
                <h2>htp group</h2>
                <p>
                    <a class="btn btn-lg btn-primary btn-see-now" href="">
                        Khám phá ngay
                    </a>
                </p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url({{asset('themes/htp_group_html/images/sliders/slider_2.jpg')}}); background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
            <div class="container">
                <h5>Thông minh - Tiện ích - Thân thiện</h5>
                <h2>htp group</h2>
                <p>
                    <a class="btn btn-lg btn-primary btn-see-now" href="">
                        Khám phá ngay
                    </a>
                </p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url({{asset('themes/htp_group_html/images/sliders/slider_3.jpg')}}); background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
            <div class="container">
                <h5>Thông minh - Tiện ích - Thân thiện</h5>
                <h2>htp group</h2>
                <p>
                    <a class="btn btn-lg btn-primary btn-see-now" href="">
                        Khám phá ngay
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<!--end slider-->

<div class="business-areas" style=" background-image: url({{asset('themes/htp_group_html/images/bussiness_area_bg.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-block-container">Lĩnh vực</h3>
            </div>
            <div class="col-md-4 business-box">
                <img class="lazyload" src="{{asset('themes/htp_group_html/images/bg_group_3.png')}}" alt="">
                <div class="border-box">
                    <div class="box-content">
                        <h3 class="title-box">Trung gian thanh toán</h3>
                        <p>
                            OmiPay là một ứng dụng thanh toán trực tuyến đáp ứng xu hướng thanh
                            toán không dùng tiền mặt đang được phát triển rộng rãi,
                            góp phần thúc đẩy nền kinh tế xã hội một cách nhanh chóng nhờ đưa ra các giải pháp đồng bộ đảm bảo tính an toàn, bảo mật,
                            chi phí hợp lý và mang lại sự thuận tiện, dễ dàng cho người dùng.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 business-box">
                <img class="lazyload" src="{{asset('themes/htp_group_html/images/bg_group_2.png')}}" alt="">
                <div class="border-box">
                    <div class="box-content">
                        <h3 class="title-box">THƯƠNG MẠI VÀ DỊCH VỤ</h3>
                        <p>
                            Các dịch vụ tiện ích cho khối chung cư, trường học,… được phát triển mở rộng với nhiều loại hình dịch vụ nhằm cung cấp cho đời sống cộng đồng có chất lượng hoàn hảo nhất ở thời đại công nghệ số.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 business-box">
                <img class="lazyload" src="{{asset('themes/htp_group_html/images/bg_group_1.png')}}" alt="">
                <div class="border-box">
                    <div class="box-content">
                        <h3 class="title-box">BẤT ĐỘNG SẢN</h3>
                        <p>
                            Bằng sự uy tín trong kinh doanh, chúng tôi đã phát triển được thương hiệu của mình bền vững với nhiều dự án bất động sản được đánh giá cao, là đối tác chiến lược của nhiều đơn vị và là điểm đến tin cậy của đông đảo khách hàng.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grow-up" style=" background-image: url({{asset('themes/htp_group_html/images/grow_up_bg.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h3 class="title">Ngày 07/01/2022 Công ty được Ngân hàng Nhà nước Việt Nam cấp Giấy phép hoạt động cung ứng dịch vụ trung gian thanh toán với thương hiệu Cổng thanh toán/Ví điện tử OmiPay</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <p class="title-grow-up">Đột phá</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <p class="btn-border">
                    <a class="btn btn-lg btn-primary btn-see-now" href="">
                        Khám phá ngay
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- <article>-->
<div class="list-article" style=" background-image: url({{asset('themes/htp_group_html/images/bg_article.jpg')}});">
    <div class="container">
        <div class="row-title">
            <div class="article-title">TIN TỨC</div>
            <div class="article-link-detail">
                <a href="">ĐẾN TRANG TIN TỨC -></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 article-box">
                <a href="">
                    <div class="img-thumb">
                        <img class="lazyload" src="{{asset('themes/htp_group_html/images/article_thumb_1.png')}}" alt="" class="thumbnail">
                        <p class="thumbnail img-hover">
                    </div>
                    <div class="article-info">
                        <ul>
                            <li class="article-time">25/4/2022</li>
                            <li class="category">• Tin thị trường</li>
                        </ul>
                        <p class="article-title">
                            Tăng tốc hành trình chuyển đổi số quốc gia
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 article-box">
                <a href="">
                    <div class="img-thumb">
                        <img class="lazyload" src="{{asset('themes/htp_group_html/images/Rectangle 1485.png')}}" alt="" class="thumbnail">
                        <p class="thumbnail img-hover">
                    </div>
                    <div class="article-info">
                        <ul>
                            <li class="article-time">25/4/2022</li>
                            <li class="category">• Tin thị trường</li>
                        </ul>
                        <p class="article-title">
                            Công nghệ tài chính Fintech tại Việt Nam: nắm bắt xu hướng để phát triển
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 article-box">
                <a href="">
                    <div class="img-thumb">
                        <img class="lazyload" src="{{asset('themes/htp_group_html/images/Rectangle 1484.png')}}" alt="" class="thumbnail">
                        <p class="thumbnail img-hover">
                    </div>
                    <div class="article-info">
                        <ul>
                            <li class="article-time">25/4/2022</li>
                            <li class="category">• Tin thị trường</li>
                        </ul>
                        <p class="article-title">
                            Sưu tập bất động sản hạng sang: xu hướng mới của giới nhà giàu
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="box-bg-city" style="background-image: url({{asset('themes/htp_group_html/images/box_bg_city.png')}}); background-position: center;
    background-repeat: no-repeat;
    background-size: cover; height: 355px;">
</div>

<div class="about-htp-group" style="background-image: url({{asset('themes/htp_group_html/images/bg_article.jpg')}});">
    <div class="container">
        <div class="row hr-line">
            <hr>
        </div>
        <div class="row about-htp-title">
            <h2>CHÚNG TÔI LÀ HTP GROUP</h2>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="htp-info">
                    <h4>THÁCH THỨC MỌI GIỚI HẠN</h4>
                    <p class="description">Với mong muốn đem đến cho thị trường những sản phẩm - dịch vụ hoàn hảo với giá trị cao nhất cho khách hàng, ở bất cứ lĩnh vực nào HTP group với tinh thần dám nghĩ, dám làm luôn nỗ lực nghiên cứu, tìm tòi, ứng dụng những tiến bộ khoa học kỹ thuật mới nhất, chủ dộng cả tiến, nâng cao chất lượng.</p>
                    <p class="btn-border">
                        <a class="btn btn-lg btn-primary btn-see-now" href="">
                            Khám phá ngay
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-6 htp-image">
                <img class="lazyload" src="{{asset('themes/htp_group_html/images/business-corporate-people-working-concept 1.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="about-omipay" style="background-image: url({{asset('themes/htp_group_html/images/bg_omipay.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('themes/htp_group_html/images/Graphics.png')}}" alt="" class=" lazyload graphics">
            </div>
            <div class="col-6">
                <div class="info">
                    <h1 class="title-about-omipay">TÌM HIỂU VỀ <br> OMIPAY</h1>
                    <h4>Khám phá công nghệ</h4>
                    <p class="description">OmiPay là cổng thanh toán điện tử được nhà nước cấp phép hoạt động ngày 07/01/2022. Với mục tiêu tương lai là trở thành cổng thanh toán uy tín cho người dùng.</p>
                    <p class="btn-border">
                        <a class="btn btn-lg btn-primary btn-see-now btn-color-gray" href="">
                            Khám phá ngay
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

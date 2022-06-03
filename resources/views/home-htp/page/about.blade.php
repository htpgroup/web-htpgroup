@extends('home-htp.layouts.main')
@section('style')

    <link rel="stylesheet" href="{{asset('themes/htp_group_html/css/intro.css')}}">
    <style>

    </style>
@endsection
@section('content')


    <div class="bg-all introduce" style="background-image: url({{asset('themes/htp_group_html/images/intro/bg_intro.png')}});">
        <div class="container">
            <div class="row">
                <h1>GIỚI THIỆU</h1>
                <p class="title">HTP Group</p>
                <p class="desc">Với mong muốn đem đến cho thị trường những sản phẩm - dịch vụ hoàn hảo với giá trị cao nhất cho khách hàng, ở bất cứ lĩnh vực nào HTP group với tinh thần dám nghĩ,
                    dám làm luôn nỗ lực nghiên cứu, tìm tòi, ứng dụng những tiến bộ khoa học kỹ thuật mới nhất, chủ dộng cả tiến, nâng cao chất lượng.</p>

            </div>
        </div>
    </div>

    <div class="bg-all box-feature" style=" background-image: url({{asset('themes/htp_group_html/images/bussiness_area_bg.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="main-feature" style="margin: 0 auto;float: right;margin-top: 30% !important;">
                        <a href="">
                            <div class="img-thumb">
                                <img src="{{asset('themes/htp_group_html/images/intro/1.png')}}" alt="" class="thumbnail">
                                <h1 class="title">Sứ mệnh</h1>
                            </div>
                            <p>
                                Tăng tốc hành trình chuyển đổi số quốc gia
                            </p>

                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="main-feature">
                        <a href="">
                            <div class="img-thumb">
                                <img src="{{asset('themes/htp_group_html/images/intro/2.png')}}" alt="" class="thumbnail">
                                <h1 class="title">TẦM NHÌN</h1>
                            </div>
                            <p>
                                HTP GROUP định hướng phát triển thành Công ty đa lĩnh vực, không ngừng đổi mới, sáng tạo để kiến tạo các sản phẩm - dịch vụ đem lại trải nghiệm tối ưu cho khách hàng.
                            </p>

                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="main-feature  see-more">
                        <p class="btn-border border-black">
                            <a class="btn btn-lg btn-primary btn-see-now" href="">
                                Xem thêm
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="main-feature">
                        <a href="">
                            <div class="img-thumb">
                                <img src="{{asset('themes/htp_group_html/images/intro/3.png')}}" alt="" class="thumbnail">
                                <h1 class="title">GIÁ TRỊ CỐT LÕI</h1>
                            </div>
                            <p>
                                Cùng với khách hàng chúng tôi phát triển không ngừng. Lợi ích của khách hàng cũng chính là lợi ích của chúng tôi và lợi ích sẽ đến khi chúng tôi đem tới cho khách hàng dịch vụ chất lượng, chuyên nghiệp, thỏa mãn tối đa các nhu cầu của khách hàng.
                            </p>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="htp-social">
        <div class="container">
            <div class="row">
                <div class="col-6 htp-description">
                    <h1>HTP GROUP</h1>
                    <p>Được thành lập từ 2020, công ty hoạt động trong 3 lĩnh vực kinh doanh cốt lõi:</p>
                    <div class="shortcut-links">
                        <a href="">
                            <img src="{{asset('themes/htp_group_html/images/vi-flag.png')}}" alt="">
                            <p>Bất động sản</p>
                        </a>
                        <a href="">
                            <img src="{{asset('themes/htp_group_html/images/vi-flag.png')}}" alt="">
                            <p>Công nghệ</p>
                        </a>
                        <a href="">
                            <img src="{{asset('themes/htp_group_html/images/vi-flag.png')}}" alt="">
                            <p>Thương mại và dịch vụ</p>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="list-social">
                        <div class="item-social">
                            <a href="">
                                <div class="social-thumb">
                                    <img src="{{asset('themes/htp_group_html/images/intro/youtube.png')}}" alt="">
                                    <img src="{{asset('themes/htp_group_html/images/intro/yb_hover.png')}}" class="social-thumb-hover">
                                </div>
                                <div class="social-name">
                                    <p>youtube</p>
                                </div>

                            </a>
                        </div>
                        <div class="item-social">
                            <a href="">
                                <div class="social-thumb">
                                    <img src="{{asset('themes/htp_group_html/images/intro/facebook.png')}}" alt="">
                                    <img src="{{asset('themes/htp_group_html/images/intro/fb_hover.png')}}" class="social-thumb-hover">
                                </div>
                                <div class="social-name">
                                    <p>Facebook</p>
                                </div>
                            </a>
                        </div>
                        <div class="item-social">
                            <a href="">
                                <div class="social-thumb">
                                    <img src="{{asset('themes/htp_group_html/images/intro/instagram.png')}}" alt="">
                                    <img src="{{asset('themes/htp_group_html/images/intro/ins_hover.png')}}" class="social-thumb-hover">
                                </div>
                                <div class="social-name">
                                    <p>Instagram</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                            <img src="{{asset('themes/htp_group_html/images/article_thumb_1.png')}}" alt="" class="thumbnail">
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
                            <img src="{{asset('themes/htp_group_html/images/Rectangle 1485.png')}}" alt="" class="thumbnail">
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
                            <img src="{{asset('themes/htp_group_html/images/Rectangle 1484.png')}}" alt="" class="thumbnail">
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
@endsection

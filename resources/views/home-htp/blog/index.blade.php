@extends('home-htp.layouts.main')

@section('content')
    <section class="introsingle bg-all" style="background-image: url({{asset('themes/htp_group_html/images/bannersingle.jpg')}});">
        <div class="container">
            <div class="text-center">


                <select class="mb-3 formcustom" aria-label=".form-select-lg example">
                    <option selected>Tất cả</option>
                    <option value="1">Chuyên về HTP</option>
                    <option value="2">Tin tức công nghệ</option>
                    <option value="3">Tin đời sống</option>
                    <option value="4">Tin tuyển dụng</option>
                </select>
            </div>
            <!-- <div class="row">

                  <h1>Tìm hiểu về omi pay</h1>
              đoạn này có thể bỏ absolute để cùng 1 ảnh nhưng mỗi bài sẽ tự đổi tên
            </div> -->

        </div>
    </section>
    <section class="afterintro">
        <div class="container">
            <div class="intro-archiver">
                <img src="{{asset('themes/htp_group_html/images/archiver-bg2.jpg')}}" alt="hinh-anh-bg-archive">
            </div>
        </div>
    </section>
    <section class="main-single">
        <div class="container">
            <p id="breadcrumbs"><span><span><a href="https://ichigologistics.com/">22/03/2022</a> » <span class="breadcrumb_last" aria-current="page">Đội ngũ phát triển</span></span></span></p>
            <div id="primary">
                <main id="main" class="site-main" role="main">
                    <h2 class="title-single">Thông tin nổi bật về cổng thanh toán trực tuyến</h2>
                    <div class="content">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>

                    </div>
                    <div class="line-spaces"></div>
                    <div class="group-post">
                        <div class="row">
                            <div class="col-md-6 article-box mb-5">
                                <a href="{{route('HomeHTP.newShowWebPay', ['id' =>1])}}">
                                    <div class="img-thumbarchiver">
                                        <img src="{{asset('themes/htp_group_html/images/imgnews.jpg')}}" alt="" class="thumbnail">
                                        <p class="thumbnail img-hover">
                                    </div>
                                    <div class="article-info">
                                        <ul>
                                            <li class="article-time">25/4/2022</li>
                                            <li class="category">• Tin thị trường</li>
                                        </ul>
                                        <h3 class="article-title">
                                            TÌM HIỂU VỀ BLOCK CHAIN ÁP DỤNG TRONG THỰC TIỄN NHƯ THẾ NÀO
                                        </h3>
                                        <div class="contentdescript">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 article-box mb-5">
                                <a href="{{route('HomeHTP.newShowWebPay', ['id' =>1])}}">
                                    <div class="img-thumbarchiver">
                                        <img src="{{asset('themes/htp_group_html/images/imgnews.jpg')}}" alt="" class="thumbnail">
                                        <p class="thumbnail img-hover">
                                    </div>
                                    <div class="article-info">
                                        <ul>
                                            <li class="article-time">25/4/2022</li>
                                            <li class="category">• Tin thị trường</li>
                                        </ul>
                                        <h3 class="article-title">
                                            TÌM HIỂU VỀ BLOCK CHAIN ÁP DỤNG TRONG THỰC TIỄN NHƯ THẾ NÀO
                                        </h3>
                                        <div class="contentdescript">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 article-box mb-5">
                                <a href="{{route('HomeHTP.newShowWebPay', ['id' =>1])}}">
                                    <div class="img-thumbarchiver">
                                        <img src="{{asset('themes/htp_group_html/images/imgnews.jpg')}}" alt="" class="thumbnail">
                                        <p class="thumbnail img-hover">
                                    </div>
                                    <div class="article-info">
                                        <ul>
                                            <li class="article-time">25/4/2022</li>
                                            <li class="category">• Tin thị trường</li>
                                        </ul>
                                        <h3 class="article-title">
                                            TÌM HIỂU VỀ BLOCK CHAIN ÁP DỤNG TRONG THỰC TIỄN NHƯ THẾ NÀO
                                        </h3>
                                        <div class="contentdescript">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 article-box mb-5">
                                <a href="{{route('HomeHTP.newShowWebPay', ['id' =>1])}}">
                                    <div class="img-thumbarchiver">
                                        <img src="{{asset('themes/htp_group_html/images/imgnews.jpg')}}" alt="" class="thumbnail">
                                        <p class="thumbnail img-hover">
                                    </div>
                                    <div class="article-info">
                                        <ul>
                                            <li class="article-time">25/4/2022</li>
                                            <li class="category">• Tin thị trường</li>
                                        </ul>
                                        <h3 class="article-title">
                                            TÌM HIỂU VỀ BLOCK CHAIN ÁP DỤNG TRONG THỰC TIỄN NHƯ THẾ NÀO
                                        </h3>
                                        <div class="contentdescript">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 article-box mb-5">
                                <a href="{{route('HomeHTP.newShowWebPay', ['id' =>1])}}">
                                    <div class="img-thumbarchiver">
                                        <img src="{{asset('themes/htp_group_html/images/imgnews.jpg')}}" alt="" class="thumbnail">
                                        <p class="thumbnail img-hover">
                                    </div>
                                    <div class="article-info">
                                        <ul>
                                            <li class="article-time">25/4/2022</li>
                                            <li class="category">• Tin thị trường</li>
                                        </ul>
                                        <h3 class="article-title">
                                            TÌM HIỂU VỀ BLOCK CHAIN ÁP DỤNG TRONG THỰC TIỄN NHƯ THẾ NÀO
                                        </h3>
                                        <div class="contentdescript">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 article-box mb-5">
                                <a href="{{route('HomeHTP.newShowWebPay', ['id' =>1])}}">
                                    <div class="img-thumbarchiver">
                                        <img src="{{asset('themes/htp_group_html/images/imgnews.jpg')}}" alt="" class="thumbnail">
                                        <p class="thumbnail img-hover">
                                    </div>
                                    <div class="article-info">
                                        <ul>
                                            <li class="article-time">25/4/2022</li>
                                            <li class="category">• Tin thị trường</li>
                                        </ul>
                                        <h3 class="article-title">
                                            TÌM HIỂU VỀ BLOCK CHAIN ÁP DỤNG TRONG THỰC TIỄN NHƯ THẾ NÀO
                                        </h3>
                                        <div class="contentdescript">
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-md-12">
                                <p class="text-center">
                                    <a class="btn btn-lg viewmores fill" href="{{route('HomeHTP.newShowWebPay', ['id' =>1])}}">
                                        Tải thêm
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

@endsection

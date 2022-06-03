@extends('home-htp.layouts.main', ['page' =>2])
@section('style')

    <link rel="stylesheet" href="{{asset('themes/htp_group_html/css/activity.css')}}">
    <style>

    </style>
@endsection
@section('content')

    <div class="bg-all introduce" style=" background-image: url({{asset('themes/htp_group_html/images/activity/bg_activity.png')}}); height: 640px;">
        <div class="container">
            <div class="row">
                <h1>LĨNH VỰC</h1>
                <p class="title">HTP Group</p>
                <p class="desc">Với mong muốn đem đến cho thị trường những sản phẩm - dịch vụ hoàn hảo với giá trị cao nhất cho khách hàng, ở bất cứ lĩnh vực nào HTP group với tinh thần dám nghĩ,
                    dám làm luôn nỗ lực nghiên cứu, tìm tòi, ứng dụng những tiến bộ khoa học kỹ thuật mới nhất, chủ dộng cả tiến, nâng cao chất lượng.</p>

            </div>
        </div>
    </div>
    <div class="activity-content">
        <div class="container">
            <div class="row">
                <ul class="nav nav-pills nav-activity-tab" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab-1" data-bs-toggle="pill"
                           data-bs-target="#pills-tab-1" type="button" role="tab" aria-controls="pills-tab-1" aria-selected="true">BẤT ĐỘNG SẢN</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">TRUNG GIAN THANH TOÁN</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-contact"
                                type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Thương mại dịch vụ</button>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="col-md-12 mt-2 mb-2 tab-content-description">
                            <h5>Thông tin chi tiết</h5>
                            <p>OmiPay là một ứng dụng thanh toán trực tuyến đáp ứng xu hướng thanh toán không dùng tiền mặt đang được phát triển rộng rãi, góp phần thúc đẩy nền kinh tế xã hội một cách nhanh chóng nhờ đưa ra các giải pháp đồng bộ đảm bảo tính an toàn, bảo mật, chi phí hợp lý và mang lại sự thuận tiện, dễ dàng cho người dùng.</p>
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="main-content-activity">
                                        <h2>Ví điện tử</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle 1513.png')}}" alt="">
                                                <p class="thumbnail img-hover"></p>
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2>CỔNG THANH TOÁN</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle.png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2>THU HỘ</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle 1513 (1).png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>
                    </div>
                    <!-- trung gian thanh toan-->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="col-md-12 mt-2 mb-2 tab-content-description">
                            <h5>Thông tin chi tiết</h5>
                            <p>OmiPay là một ứng dụng thanh toán trực tuyến đáp ứng xu hướng thanh toán không dùng tiền mặt đang được phát triển rộng rãi, góp phần thúc đẩy nền kinh tế xã hội một cách nhanh chóng nhờ đưa ra các giải pháp đồng bộ đảm bảo tính an toàn, bảo mật, chi phí hợp lý và mang lại sự thuận tiện, dễ dàng cho người dùng.</p>
                        </div>

                        <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="main-content-activity">
                                        <h2>Ví điện tử</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle 1513.png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2>CỔNG THANH TOÁN</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle.png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2>THU HỘ</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle 1513 (1).png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!--thuong mai dich vu-->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="col-md-12 mt-2 mb-2 tab-content-description">
                            <h5>Thông tin chi tiết</h5>
                            <p>OmiPay là một ứng dụng thanh toán trực tuyến đáp ứng xu hướng thanh toán không dùng tiền mặt đang được phát triển rộng rãi, góp phần thúc đẩy nền kinh tế xã hội một cách nhanh chóng nhờ đưa ra các giải pháp đồng bộ đảm bảo tính an toàn, bảo mật, chi phí hợp lý và mang lại sự thuận tiện, dễ dàng cho người dùng.</p>
                        </div>

                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="main-content-activity">
                                        <h2>Ví điện tử</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle 1513.png')}}" alt="">
                                                <p class="thumbnail img-hover"></p>
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2>CỔNG THANH TOÁN</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle.png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2>THU HỘ</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle 1513 (1).png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ ví điện tử cho các khách hàng cá nhân hoặc khách hàng doanh nghiệp, Các khách hàng sẽ được cung cấp một tài khoản được định danh bằng số điện thoại. Tài khoản được sử dụng để giao dịch trực tuyến trong hệ sinh thái của Omipay và các Merchant của Omipay.
                                                </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

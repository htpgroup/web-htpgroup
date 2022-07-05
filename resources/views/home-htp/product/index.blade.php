@extends('home-htp.layouts.main', ['page' =>2])
@section('style')

    <link rel="stylesheet" href="{{asset('themes/htp_group_html/css/activity.css')}}">
    <style>
        .titleItem{
            color: #1a1e21
        }
.carousel-item{
    background-color: #ECE8E1;
}
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
                        <div class="col-md-12 mt-5 mb-5 tab-content-description">
                            <h5>Thông tin chi tiết</h5>
                            <p>Bằng sự uy tín trong kinh doanh, chúng tôi đã phát triển được thương hiệu của mình bền vững với nhiều dự án bất động sản được đánh giá cao, là đối tác chiến lược của nhiều đơn vị và là điểm đến tin cậy của đông đảo khách hàng.</p>
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <div class="main-content-activity">
                                        <h2 class="titleItem">BẤT ĐỘNG SẢN</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle1513_bds.png')}}" alt="">
                                                <p class="thumbnail img-hover"></p>
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Theo số liệu từ Hội môi giới Bất động sản Khánh Hòa (KAREB), số lượng giao dịch của thị trường bất động sản Nha Trang – Khánh Hòa trong quý 1/2021 chỉ mới có dấu hiệu tăng ở phân khúc chung cư, đất nền, nhà phố giá bình dân. Nguyên nhân chính là do ảnh hưởng kinh tế từ dịch Covid-19 và dư âm của công tác thanh kiểm tra các dự án sai phạm, vướng mắc về mặt pháp lý tại địa phương.      </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2 class="titleItem">BẤT ĐỘNG SẢN</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle1513_BDS2.png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Những chuyến đi không chỉ mang lại những cái nhìn mới mẻ về thiên nhiên - văn hóa khắp thế giới mà còn mở ra cơ hội đầu tư, đặc biệt trong lĩnh vực bất động sản. Vì thế, loại hình “du lịch kết hợp thăm thân và khảo sát tiềm năng bất động sản” đang trở thành sản phẩm hấp dẫn, thu hút sự quan tâm của nhiều khách hàng. </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2 class="titleItem">BẤT ĐỘNG SẢN</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/Rectangle1513BDS_3.png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Theo số liệu của FiinGroup, quy mô giá trị phát hành sơ cấp trong 9 tháng năm 2021 đạt 430.000 tỷ đồng, tăng 27% so với cùng kỳ năm trước. Trong đó, ngành bất động sản ghi nhận giá trị phát hành đạt 172.000 tỷ đồng, tăng 2% so với cùng kỳ.   </p>
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
                                <span class="visually-hidden">Trước</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Sau</span>
                            </button>

                        </div>
                    </div>
                    <!-- trung gian thanh toan-->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="col-md-12 mt-5 mb-5 tab-content-description">
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
                                        <h2 class="titleItem">Ví điện tử</h2>
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
                                        <h2 class="titleItem">CỔNG THANH TOÁN</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/image16.png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Omipay cung cấp dịch vụ cổng thanh toán điện tử cho các khách hàng doanh nghiệp, khách hàng có thể sử dụng cổng thanh toán Omipay để phục vụ thanh toán cho các khách hàng của mình thanh toán hàng hóa dịch vụ thông qua thẻ ATM của các ngân hàng nội địa ở Việt Nam và 03 thẻ quốc tế Visa, Mastercard, JCB. </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2 class="titleItem">THU HỘ</h2>
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
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Trước</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Sau</span>
                            </button>
                        </div>
                    </div>
                    <!--thuong mai dich vu-->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="col-md-12 mt-5 mb-5 tab-content-description">
                            <h5>Thông tin chi tiết</h5>
                            <p>Các dịch vụ tiện ích cho khối chung cư, trường học,… được phát triển mở rộng với nhiều loại hình dịch vụ nhằm cung cấp cho đời sống cộng đồng có chất lượng hoàn hảo nhất ở thời đại công nghệ số.</p>
                        </div>

                        <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="main-content-activity">
                                        <h2 class="titleItem">Thương mại điện tử</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/intro/Rectangle1513(3).png')}}" alt="">
                                                <p class="thumbnail img-hover"></p>
                                            </div>
                                            <div class="activity-info" style="display: block">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Website eCommerce càng sở hữu nhiều tính năng nâng cao thì càng giúp doanh nghiệp tối ưu quản lý và vận hành hoạt động kinh doanh của mình. Đặc biệt, đối với các doanh nghiệp eCommerce lớn, việc quản lý hàng tồn, đơn hàng, khách hàng cũng như các chiến dịch Marketing càng trở nên vô cùng phức tạp.      </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2 class="titleItem">Thương mại điện tử</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/intro/Rectangle1513(4).png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Chuyên gia trong ngành bất động sản nhận định, mô hình shop thương mại dịch vụ sẽ phát triển mạnh và thành công tại Việt Nam như đã và đang là kênh đầu tư hấp dẫn bậc nhất tại xứ Cảng Thơm.    </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="main-content-activity">
                                        <h2 class="titleItem">Thương mại điện tử</h2>
                                        <div class="activity-content">
                                            <div class="activity-img">
                                                <img src="{{asset('themes/htp_group_html/images/activity/ecommerce5.png')}}" alt="">
                                            </div>
                                            <div class="activity-info">
                                                <h2>Thông tin</h2>
                                                <p>
                                                    Cụ thể hóa các mục tiêu để Hà Nội phát triển thương mại, dịch vụ hiện đại. Thành phố sẽ hỗ trợ các nhà đầu tư mở rộng quy mô, nâng cấp các dự án hạ tầng thương mại đang hoạt động hiệu quả; tạo điều kiện thuận lợi về thủ tục đầu tư, cơ chế chính sách…     </p>
                                                <a href="">
                                                    XEM CHI TIẾT <-
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Trước</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Sau</span>
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

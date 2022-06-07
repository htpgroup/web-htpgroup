@extends('home-htp.layouts.main')

@section('style')

    <link rel="stylesheet" href="{{asset('themes/htp_group_html/css/activity.css')}}">
    <style>
.text-title-dark{
    color: #1a1e21;
}
    </style>
@endsection
@section('content')

    <div class="bg-all introduce" style="background-image: url({{asset('themes/htp_group_html/images/recruitment/image15.png')}});">
        <div class="container">
            <div class="row">
                <h1>Tuyển dụng</h1>
                <p class="title">HTP Group</p>
                <p class="desc">Với mong muốn đem đến cho thị trường những sản phẩm - dịch vụ hoàn hảo với giá trị cao nhất cho khách hàng, ở bất cứ lĩnh vực nào HTP group với tinh thần dám nghĩ,
                    dám làm luôn nỗ lực nghiên cứu, tìm tòi, ứng dụng những tiến bộ khoa học kỹ thuật mới nhất, chủ dộng cả tiến, nâng cao chất lượng.</p>

            </div>
        </div>
    </div>


    <div class="about-htp-group" style="background-image: url({{asset('themes/htp_group_html/images/bg_article.jpg')}});">
        <div class="container">
            <div class="row hr-line">
                <hr>
            </div>
            <div class="row about-htp-title">
                <h2 class="text-title-dark">Công việc</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Công việc đang mở: 7</p>
                </div>
                <div class="col-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Tất cả</option>
                        <option value="1">Phòng sản phẩm</option>
                        <option value="2">phòng kinh doanh</option>
                        <option value="3">Phòng kế toán</option>
                        <option value="4">Phòng nhân sự</option>
                    </select>
                </div>
                <div class="col-12">
                    <hr>
                    <table class="table">
                        <tbody>
                        <tr class="text-dark">
                            <td class="text-dark text-title-dark"><a href="" style="color: #1a1e21">PHP Developer</a></td>
                            <td class="text-dark">Phòng công nghệ thông tin</td>
                            <td class="text-dark">Số A7 Lô Hạ Yên Quyết Hà Nội</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

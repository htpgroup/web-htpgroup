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
                    <select class="form-select" id="listBlockCategory"  aria-label="Default select example">
                        <option selected>Tất cả</option>
                        @foreach($listCategory as $postCategory)
                            <option value="{{$postCategory->id}}" data_url="{{route('HomeHTP.newWebPay', ['category_id' => $postCategory->id,'slug' => $postCategory->slug])}}">{{$postCategory->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <hr>
                    <table class="table">
                        <tbody>
                        @foreach ($listPosts as $post)
                            @php
                                $details_url = route("HomeHTP.recruitmentShowWebPay", ['slug' => $post->slug, 'id' => $post->id]);
                            @endphp
                        <tr class="text-dark">
                            <td class="text-dark text-title-dark"><a href="{{$details_url}}" style="color: #1a1e21">   {{$post->name}}</a></td>
                            <td class="text-dark">Phòng công nghệ thông tin</td>
                            <td class="text-dark">Số A7 Lô Hạ Yên Quyết Hà Nội</td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection



@section('script2')

    <script src="{{asset('assets/yii2-assets/yii.js')}}"></script>
    <script src="{{asset('assets/yii2-assets/yii.activeForm.js')}}"></script>
    <script src="{{asset('assets/yii2-assets/yii.validation.js')}}"></script>
    <!-- Google recaptcha API library -->
    <script src="https://www.google.com/recaptcha/api.js?render={{config('captcha.sitekey')}}&hl=vi"></script>
    <script>
        window.onload = function() {
            var $recaptcha = document.querySelector('#g-recaptcha-response');

            if($recaptcha) {
                $recaptcha.setAttribute("required", "required");
            }
        };
    </script>
    <script>
        jQuery(function ($) {
            $( "#listBlockCategory" ).change(function() {
                //alert( "Handler for .change() called." );
                //alert( "Handler for .change() called." );
                var optionUrl = $('option:selected', this).attr('data_url');
                //alert(option);
                window.location.href = optionUrl;
            });
        });
    </script>
@endsection

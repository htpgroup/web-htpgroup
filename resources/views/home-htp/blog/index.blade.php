@extends('home-htp.layouts.main')

@section('style')
    <style>

    </style>
@endsection
@section('content')
    <section class="introsingle bg-all" style="background-image: url({{asset('themes/htp_group_html/images/bannersingle.jpg')}});">
        <div class="container">
            <div class="text-center">


                <select class="mb-3 formcustom" id="listBlockCategory" aria-label=".form-select-lg example">
                    <option selected>Tất cả</option>
                    @foreach($listCategory as $postCategory)
                        <option value="{{$postCategory->id}}" data_url="{{route('HomeHTP.newWebPay', ['category_id' => $postCategory->id,'category' => $postCategory->id,'slug' => $postCategory->slug])}}">{{$postCategory->name}}</option>
                    @endforeach
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
                        <p class="mb-8 leading-relaxed">
                            Trang chuyên bản tin về công ty.
                            <br>
                            Các tin tức mới nhất.
                        </p>
                    </div>
                    <div class="line-spaces"></div>
                    <div class="group-post">
                        <div class="row">
                            @foreach ($listPosts as $post)
                                @php
                                    $details_url = route("HomeHTP.newShowWebPay", ['slug' => $post->slug, 'id' => $post->id]);
                                @endphp
                            <div class="col-md-6 article-box mb-5">
                                <a href="{{$details_url}}">
                                    <div class="img-thumbarchiver">
                                        <img src="{{$post->featured_image}}" alt="" class="thumbnail">
                                        <p class="thumbnail img-hover">
                                    </div>
                                    <div class="article-info">
                                        <ul>
                                            <li class="article-time">{{$post->created_at->format('d-m-Y')}}</li>
                                            <li class="category">• {{$post->category_name}}</li>
                                        </ul>
                                        <h3 class="article-title">
                                            {{$post->name}}
                                        </h3>
                                        <div class="contentdescript">
                                            <p>  {{$post->intro}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach


                            <div class="col-12 col-md-12">
                                <p class="text-center">
                                    <a class="btn btn-lg viewmores fill" href="{{route('HomeHTP.newShowWebPay', ['id' =>1])}}">
                                        Tải thêm
                                    </a>
                                </p>
                            </div>
                                <div class="d-flex justify-content-center w-100 mt-3">
                                        {!! $listPosts->appends(request()->input())->links('vendor.pagination.bootstrap-4') !!}
                                </div>
                        </div>


                    </div>
                </main>
            </div>
        </div>
    </section>

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
                var optionUrl = $('option:selected', this).attr('data_url');
                //alert(option);
                window.location.href = optionUrl;
            });
        });
    </script>
@endsection

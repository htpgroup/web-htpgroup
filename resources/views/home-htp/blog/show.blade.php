@extends('home-htp.layouts.main')

@section('content')

    <section class="introsingle bg-all" style="background-image: url({{asset('themes/htp_group_html/images/bannersingle.jpg')}});">
        <div class="container">
            <!-- <div class="row">

                  <h1>Tìm hiểu về omi pay</h1>
              đoạn này có thể bỏ absolute để cùng 1 ảnh nhưng mỗi bài sẽ tự đổi tên
            </div> -->
        </div>
    </section>
    <section class="main-single">
        <div class="container">
            <p id="breadcrumbs"><span><span><a href="https://ichigologistics.com/">{{$post->published_at->isoFormat('llll')}}</a> » <span class="breadcrumb_last" aria-current="page">{{$post->category_name}}</span></span></span></p>
            <div id="primary">
                <main id="main" class="site-main" role="main">
                    <h2 class="title-single">{{$post->name}}</h2>
                    <div class="content">
                        {!!$post->content!!}
                    </div>
                </main>
            </div>
            <div class="mt-10 mb-10" style="margin-bottom: 10rem"></div>
        </div>

    </section>


@endsection

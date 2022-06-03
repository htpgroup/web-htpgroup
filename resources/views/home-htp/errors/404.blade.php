@extends('domain.store.layouts.error' , ['hide_footer' => true])

@section("pageTitle","Home page")
@section('style')

    <style>

    </style>
@endsection
@section('content')

<section class="py-14 2xl:pt-14 2xl:pb-32 bg-gray-50 overflow-hidden">
    <div class="relative container px-4 mx-auto">
        <img class="absolute left-0 -bottom-6 xl:-left-10 md:bottom-24 z-30 w-28 md:w-auto" src="{{asset_cdn('themes/shuffle/public/uinel-assets/images/http-codes/cursor-orange.svg')}}" alt="">
        <img class="absolute right-0 xl:-right-12 top-0 md:top-96 z-30 w-24 md:w-auto" src="{{asset_cdn('themes/shuffle/public/uinel-assets/images/http-codes/cursor-blue.svg')}}" alt="">
        <img class="absolute md:left-24 -top-16 z-10" src="{{asset_cdn('themes/shuffle/public/uinel-assets/images/http-codes/elipse-purple.svg')}}" alt="">
        <img class="absolute -left-16 top-12 md:-top-5" src="{{asset_cdn('themes/shuffle/public/uinel-assets/images/http-codes/elipse-yellow.svg')}}" alt="">
        <div class="relative text-center py-12 md:py-24 px-4 2xl:pt-36 2xl:pb-60 bg-white rounded-7xl z-20">
            <div class="relative z-40">
                <span class="block mb-9 uppercase tracking-widest text-xs text-gray-300">Không tìm thấy trang</span>
                <h2 class="mb-6 font-medium font-heading text-9xl md:text-10xl xl:text-smxl leading-tight">404</h2>
                <p class="max-w-md mb-20 xl:mb-24 mx-auto font-heading font-medium text-3xl leading-10">Lỗi. Trang truy cập bị lỗi hoặc không tồn tại.</p>
                <a class="inline-flex items-center pb-2 font-bold tracking-tight text-xl leading-6 text-green-600 hover:text-green-700 border-b border-green-600 hover:border-green-700" href="#">
                    <span class="mr-3">Quay lại trang chủ</span>
                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.8 1L15 7H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11 12L15 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

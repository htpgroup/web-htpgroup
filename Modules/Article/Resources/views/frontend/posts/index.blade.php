@extends('frontend.layouts.app')

@section('title') {{ __("Posts") }} @endsection

@section('content')

<section class="bg-gray-100 text-gray-600 py-20">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="text-3xl sm:text-4xl mb-4 font-medium text-gray-800">
                {{ __("Articles") }}
            </h1>
            <p class="mb-8 leading-relaxed">
                We publish articles on a number of topics.
                <br>
                We encourage you to read our posts and let us know your feedback. It would be really help us to move forward.
            </p>

            @include('frontend.includes.messages')
        </div>
    </div>
</section>

<section class="bg-white text-gray-600 p-6 sm:p-20">
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
        @foreach ($$module_name as $post)
        @php
        $details_url = route("frontend.$module_name.show",[encode_id($post->id), $post->slug]);
        @endphp

        <div class="">
            <div class=" bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-stretch">
                    <a href="{{$details_url}}" class="overflow-hidden">
                        <img src="{{$post->featured_image}}" alt="" class="rounded-t-lg transform hover:scale-110 duration-200">
                    </a>
                    <div class="p-3 sm:p-5">
                        <a href="{{$details_url}}">
                            <h2 class="mb-2 text-md sm:text-2xl tracking-tight text-gray-900 dark:text-white">
                                {{$post->name}}
                            </h2>
                        </a>
                        <div class="flex flex-row content-center my-4">
                            <img class="w-5 h-5 sm:w-8 sm:h-8 rounded-full" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="">

                            {!!isset($post->created_by_alias)? $post->created_by_alias : '<a href="'.route('frontend.users.profile', $post->created_by).'">
                                <h6 class="text-muted text-sm small ml-2 mb-0">'.$post->created_by_name.'</h6>
                            </a>'!!}
                        </div>
                        <p class="flex-1 h-full mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{$post->intro}}
                        </p>
                        <p>
                            <a href="{{route('frontend.categories.show', [encode_id($post->category_id), $post->category->slug])}}" class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 dark:hover:bg-blue-300">{{$post->category_name}}</a>
                        </p>
                        <p>
                            @foreach ($post->tags as $tag)
                            <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 dark:hover:bg-blue-300">
                                {{$tag->name}}
                            </a>
                            <!-- text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 -->
                            @endforeach
                        </p>

                        <div class="text-end">
                            <a href="{{$details_url}}" class="inline-flex items-center text-sm outline outline-1 outline-gray-800 text-gray-700 hover:text-gray-100 bg-gray-200 hover:bg-gray-700 py-2 px-3 focus:outline-none rounded">
                                Read more
                                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <div class="d-flex justify-content-center w-100 mt-3">
        {{$$module_name->links()}}
    </div>
</section>
<!--

@if(count($$module_name))
<section class="section section-lg line-bottom-light">
    <div class="container mt-n7 mt-lg-n12 z-2">
        <div class="row">
            @php
            $post = $$module_name->shift();

            $details_url = route("frontend.$module_name.show",[encode_id($post->id), $post->slug]);
            @endphp

            <div class="col-lg-12 mb-5">
                <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                    <a href="{{$details_url}}" class="col-md-6 col-lg-6">
                        <img src="{{$post->featured_image}}" alt="" class="card-img-top">
                    </a>
                    <div class="card-body d-flex flex-column justify-content-between col-auto py-4 p-lg-5">
                        <a href="{{$details_url}}">
                            <h2>{{$post->name}}</h2>
                        </a>
                        <p>
                            {{$post->intro}}
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="avatar avatar-sm rounded-circle" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="">

                            {!!isset($post->created_by_alias)? $post->created_by_alias : '<a href="'.route('frontend.users.profile', $post->created_by).'">
                                <h6 class="text-muted small ml-2 mb-0">'.$post->created_by_name.'</h6>
                            </a>'!!}

                            <h6 class="text-muted small font-weight-normal mb-0 ml-auto"><time datetime="{{$post->published_at}}">{{$post->published_at_formatted}}</time></h6>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($$module_name as $post)
            @php
            $details_url = route("frontend.$module_name.show",[encode_id($post->id), $post->slug]);
            @endphp
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-white border-light shadow-soft p-4 rounded">
                    <a href="{{$details_url}}"><img src="{{$post->featured_image}}" class="card-img-top" alt=""></a>
                    <div class="card-body p-0 pt-4">
                        <a href="{{$details_url}}" class="h3">{{$post->name}}</a>
                        <div class="d-flex align-items-center my-4">
                            <img class="avatar avatar-sm rounded-circle" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="">
                            {!!isset($post->created_by_alias)? $post->created_by_alias : '<a href="'.route('frontend.users.profile', $post->created_by).'">
                                <h6 class="text-muted small ml-2 mb-0">'.$post->created_by_name.'</h6>
                            </a>'!!}
                        </div>
                        <p class="mb-3">{{$post->intro}}</p>
                        <a href="{{route('frontend.categories.show', [encode_id($post->category_id), $post->category->slug])}}" class="badge bg-primary">{{$post->category_name}}</a>
                        <p>
                            @foreach ($post->tags as $tag)
                            <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" class="badge bg-warning text-dark">{{$tag->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center w-100 mt-3">
            {{$$module_name->links()}}
        </div>
    </div>
</section>
@endif -->

@endsection

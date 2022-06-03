
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="wC_P-dxaTzZTIQWxrmNzOAp_5HooSg1VsMR9n3LyuIw" />
    <meta name="referrer" content="same-origin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>No problems detected | App Service Health Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .h-logo {
            height: 90px;
            -o-object-fit: contain;
            object-fit: contain;
        }
        img, video {
            height: auto;
            max-width: 100%;
        }
    </style>

</head>
<body class="text-gray-900">
<div class="content">
    <header
        class="flex flex-col-reverse md:flex-row items-center px-4 md:px-8 py-6 mb-6 md:mb-16"
        style="color: #a0aec0; background-color: #ffffff; border-bottom-color: #e2e8f0; border-bottom-width: 1px"
    >
        <div class="flex-1 text-xs text-center md:text-left mt-2 md:mt-0">
        </div>

        <div class="flex-1 flex justify-center">
            <img class="h-logo" src="https://oh-dear-media.s3.eu-central-1.amazonaws.com/7f3865e3c0404a3227fbc25f5a5d52e9/laravel-logo.png')}}" alt="Logo for Laravel Service Health Dashboard">
        </div>

        <div class="hidden md:block flex-1 text-right">
            <p class="inline-block rounded p-2 leading-snug text-left text-xs" id="autorefresh-online">
                Live updates enabled
                <br>
                Last checked
                <time datetime="2022-01-14T10:15:26.550587Z" class="font-semibold tabular-nums">
                    04:15:26 CST
                </time>
            </p>
            <p class="inline-block hidden bg-red-600 font-semibold px-1 rounded text-red-100 text-sm"
               id="autorefresh-offline">
                Offline
            </p>
        </div>
    </header>

    <main class="max-w-2xl px-6 mx-auto mb-8 md:mb-16">
        <header class="mb-8 leading-tight px-1">
            <h1 class="text-2xl md:text-3xl font-extrabold md:flex justify-between">
                Laravel Service Health Dashboard
            </h1>
        </header>

        <p class="bg-green-200 text-green-900 md:text-lg p-3 md:p-6 rounded mb-6 md:mb-6">
            No problems detected
        </p>




        <ul class="mb-6 md:mb-20">
            @foreach($arrDomain as $domain)
            <li>
                <a
                    href="{{$domain['url']}}"
                    class="flex items-center text-lg md:text-2xl p-2 rounded hover:bg-gray-100"
                    target="_blank"
                    rel="noreferrer"
                >
                    <span class="text-green-400 mr-2">•</span>
                    <span class="flex-1 truncate">{{$domain['name']}}</span>
                    <span class="text-gray-500 text-base">Online</span>
                </a>
            </li>
            @endforeach

        </ul>

        <ol>
            <li class="md:flex px-1 py-6 md:py-10 border-t last:border-b border-dashed">
                <p class="md:w-1/5 text-lg md:text-xl font-bold">
                    Jan 14
                </p>
                <div class="flex-1 pt-2px">
                    <p>No incidents on this day.</p>
                </div>
            </li>
            <li class="md:flex px-1 py-6 md:py-10 border-t last:border-b border-dashed">
                <p class="md:w-1/5 text-lg md:text-xl font-bold">
                    Jan 13
                </p>
                <div class="flex-1 pt-2px">
                    <p>No incidents on this day.</p>
                </div>
            </li>
            <li class="md:flex px-1 py-6 md:py-10 border-t last:border-b border-dashed">
                <p class="md:w-1/5 text-lg md:text-xl font-bold">
                    Jan 12
                </p>
                <div class="flex-1 pt-2px">
                    <p>No incidents on this day.</p>
                </div>
            </li>
            <li class="md:flex px-1 py-6 md:py-10 border-t last:border-b border-dashed">
                <p class="md:w-1/5 text-lg md:text-xl font-bold">
                    Jan 11
                </p>
                <div class="flex-1 pt-2px">
                    <ol>
                        <li class="mb-8">
                            <article>
                                <p class="mb-2">
                                    <time time="2022-01-11T15:48:10.000000Z" class="text-gray-600">
                                        09:48 CST
                                    </time>
                                    <span class="font-semibold text-green-600">[Resolved]</span>
                                    <span class="text-gray-400">|</span>
                                    <strong class="font-semibold">envoyer.io has recovered.</strong>
                                </p>
                            </article>
                        </li>
                        <li class="">
                            <article>
                                <p class="mb-2">
                                    <time time="2022-01-11T15:47:20.000000Z" class="text-gray-600">
                                        09:47 CST
                                    </time>
                                    <span class="font-semibold text-orange-600">[Warning]</span>
                                    <span class="text-gray-400">|</span>
                                    <strong class="font-semibold">envoyer.io appears to be down.</strong>
                                </p>
                            </article>
                        </li>
                    </ol>
                </div>
            </li>
            <li class="md:flex px-1 py-6 md:py-10 border-t last:border-b border-dashed">
                <p class="md:w-1/5 text-lg md:text-xl font-bold">
                    Jan 10
                </p>
                <div class="flex-1 pt-2px">
                    <p>No incidents on this day.</p>
                </div>
            </li>
            <li class="md:flex px-1 py-6 md:py-10 border-t last:border-b border-dashed">
                <p class="md:w-1/5 text-lg md:text-xl font-bold">
                    Jan 09
                </p>
                <div class="flex-1 pt-2px">
                    <p>No incidents on this day.</p>
                </div>
            </li>
            <li class="md:flex px-1 py-6 md:py-10 border-t last:border-b border-dashed">
                <p class="md:w-1/5 text-lg md:text-xl font-bold">
                    Jan 08
                </p>
                <div class="flex-1 pt-2px">
                    <p>No incidents on this day.</p>
                </div>
            </li>
        </ol>
    </main>

    <footer class="text-center text-gray-500 text-xs px-6 mb-4">
        <p>
            Subscribe to status updates via <a href="/rss" class="underline">RSS</a>
            <span class="text-gray-400 mx-1">|</span>
            Status page powered by <a href="https://laptrinhphp.edu.vn" target="_blank" rel="noreferrer" class="underline">Finder!</a>
        </p>
    </footer>
</div>
</body>
</html>

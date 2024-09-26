<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GOTraining</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex flex-col justify-center">
        <header>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </header>
        
        <main>
            <div class="py-12">
                <div class="flex justify-center text-5xl">
                    {{ __("ようこそGOTrainingへ！") }}
                </div>
                <div class="py-12">
                    <div class="flex justify-center py-3 bg-base">
                        <div class="border-solid border-2 border-main2 w-1/2 bg-main flex-col justify-center gap-4">
                            <h1 class="flex flex-col text-center text-2xl">＜使用方法＞</h1>
                            <div class="flex flex-col text-center text-xl py-4">
                                <p1 class="py-2">[1] Training一覧でPartを作成する</p1>
                                <p2 class="py-2">[2] 1で作成したPartを選び、Menuを作成する</p2>
                                <p3 class="py-2">[3] StartでTrainingを選択し、開始する</p3>
                                <p4 class="py-2">[4] 「重量」　「回数」　「セット」を指定し、ストップウォッチを起動する</p4>
                                <p5 class="py-2">[5] Training終了で行ったTrainingがTraining記録に反映される</p5>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center py-3 px-6 mx-auto cursor-pointer text-2xl">
                        <a class="w-1/4 flex justify-center py-3 bg-sub rounded-md hover:bg-sub2 cursor-pointer transition-all duration-300" href="/parts">始める</a>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

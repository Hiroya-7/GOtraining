<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GOTraining</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="body-font flex justify-around items-center">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-3xl">GOTraining</span>
                </a>
            </div>
        </header>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-12 items-center justify-center flex-col">
                <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/500x500">
                <div class="text-center lg:w-2/3 w-full">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">GOTraining</h1>
                    <div class="flex justify-center px-3">
                        <div class="flex justify-center px-5 text-2xl">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="flex justify-center py-3 bg-main rounded-md hover:bg-main2 cursor-pointer transition-all duration-300">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="flex justify-center py-3 bg-main rounded-md hover:bg-main2 cursor-pointer transition-all duration-300">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

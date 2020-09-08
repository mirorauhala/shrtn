<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SHRTN') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" integrity="{{ Sri::hash('css/app.css') }}" crossorigin="anonymous">
</head>
<body class="flex flex-wrap h-full">
    <div id="app" class="flex-shrink-0 w-full">
        <nav class="absolute w-full py-3">
            <div class="container mx-auto flex items-center">
                <a class="block leading-tight text-black no-underline hover:text-black" href="{{ url('/') }}">
                    <span class="uppercase tracking-logo text-2xl">{{ config('app.name', 'SHRTN') }}</span><br>
                    <span class="uppercase text-sm">Make long links short</span>
                </a>

                <div class="ml-auto">
                    <ul class="flex flex-row">
                        @guest
                            <li class="mx-3"><a class="uppercase no-underline text-black hover:text-black px-3 py-2" href="{{ route('login') }}">{{ __('Sign In') }}</a></li>
                            <li class="mx-3"><a class="bg-shrtn text-white uppercase no-underline font-bold hover:text-white rounded-lg px-6 py-3 " href="{{ route('register') }}">{{ __('Sign Up') }}</a></li>
                        @else
                            <li class="mx-3"><a href="{{ route('login') }}">{{ __('Settings') }}</a></li>
                            <li class="mx-3">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                >
                                    {{ __('Sign Out') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    </div>
    <footer class="w-full mt-auto">
        <div class="container mx-auto py-6">
            <div class="flex flex-wrap items-center">
                <div class="w-1/3">
                    <span class="uppercase tracking-logo text-2xl">{{ config('app.name', 'SHRTN') }}</span><br>
                    <span class="uppercase text-sm">Make long links short</span>
                </div>
                <div class="w-1/3">
                    <p>
                        <b>Total links shortened:</b>
                        <br>{{ get_shortened_links_count() }}
                    </p>
                </div>
                <div class="w-1/3">
                    <ul class="flex flex-wrap">
                        <li class="w-1/2"><a href="{{ url('/') }}">Shorten</a></li>
                        <li class="w-1/2"><a href="https://github.com/mirorauhala/shrtn">GitHub</a></li>
                        <li class="w-1/2"><a href="#">Statistics</a></li>
                        <li class="w-1/2"><a href="#">Browser extensions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

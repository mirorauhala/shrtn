<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body>
    <div id="app"@stack('app.class')>
        <nav class="absolute w-full py-3">
            <div class="container mx-auto flex items-center">
                <a class="block leading-tight text-black no-underline hover:text-black" href="{{ url('/') }}">
                    <span class="uppercase tracking-logo text-2xl">{{ config('app.name', 'SHRTN') }}</span><br>
                    <span class="uppercase text-sm">Make long links short</span>
                </a>

                <div class="ml-auto">
                    <ul class="flex flex-row">
                        @guest
                            <li><a class="px-3 py-2" href="{{ route('login') }}">{{ __('Sign In') }}</a></li>
                            <li><a class="px-3 py-2 " href="{{ route('register') }}">{{ __('Sign Up') }}</a></li>
                        @else
                            <li><a href="{{ route('login') }}">{{ __('Settings') }}</a></li>
                            <li>
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

        <footer>
            <div class="container mx-auto py-6">
                <div class="flex flex-wrap items-center">
                    <div class="w-1/3">
                        <span class="uppercase tracking-logo text-2xl">{{ config('app.name', 'SHRTN') }}</span><br>
                        <span class="uppercase text-sm">Make long links short</span>
                    </div>
                    <div class="w-1/3">
                        <p>
                            <b>Total links shortened:</b>
                            <br>1,234,567
                        </p>
                    </div>
                    <div class="w-1/3">
                        <ul class="flex flex-wrap">
                            <li class="w-1/2"><a href="#">Shorten</a></li>
                            <li class="w-1/2"><a href="#">GitHub</a></li>
                            <li class="w-1/2"><a href="#">Statistics</a></li>
                            <li class="w-1/2"><a href="#">Browser extensions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

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
        <main class="container mx-auto">

            <nav class="flex py-3">
                <a class="block leading-tight" href="{{ url('/') }}">
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
            </nav>
            @yield('content')
        </main>
    </div>
</body>
</html>

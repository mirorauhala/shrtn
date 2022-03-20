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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" integrity="{{ Sri::hash('css/app.css') }}" crossorigin="anonymous">
</head>
<body>
    <div id="app" class="max-w-xl mx-auto">
        <nav class="flex justify-center items-center pt-10">
            <a href="/" class="text-center text-xl tracking-tighter rounded-lg px-2 py-0.5 text-zinc-700 transition duration-75 hover:bg-sky-100 focus:bg-sky-100 hover:text-sky-500 focus:text-sky-500">SHRTN</a>
        </nav>

        @include('components.shorten')

        <main class="py-10">
            @yield('content')

            @if(session('shortened'))
                <h1 class="uppercase text-zinc-700 tracking-tight font-medium">History</h1>
                <ul>
                    @foreach(session('shortened') as $link)
                        <li><a href="{{ route('url.stats', ['url' => $link['hash']]) }}" class="text-zinc-500 transition duration-75 hover:text-zinc-700">{{ $link['url'] }}</a></li>
                    @endforeach
                </ul>
            @endif
        </main>

        <footer class="border-t py-5">
            <p class="text-center text-xs font-normal text-zinc-400 tracking-wide">
                Built with ❤️ by <a href="https://rauhala.dev" class="underline decoration-zinc-500 text-zinc-500">Miro</a>.
                View source on <a href="https://github.com/mirorauhala/shrtn" class="underline decoration-zinc-500 text-zinc-500">GitHub</a>.
            </p>
        </footer>
    </div>
</body>
</html>

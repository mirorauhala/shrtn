@extends('layouts.app')

@section('content')
    <div class="pb-10">
        <h1 class="uppercase text-zinc-700 tracking-tight font-medium">Your link <small>(click to copy)</small></h1>
        <button
            id="link"
            class="pointer underline decoration-sky-500 text-xl mt-1"
            data-copy
            data-clipboard-text="{{ url('/') . '/'. $url->hash }}">
            {{ url('/') . '/'. $url->hash }}
        </button>
    </div>

    <div class="pb-10">
        <h1 class="uppercase text-zinc-700 tracking-tight font-medium">Hits</h1>
        <p>Link has been visited {{ $url->follows->count() }} times.</p>
    </div>

    <div id="tooltip" role="tooltip" class="bg-white shadow px-2 py-1.5">Copied!</div>
@endsection

<form class="flex flex-col py-10" action="/" method="post">
    {{ csrf_field() }}
    <label for="url" class="sr-only">Link to shorten</label>
    <input
        id="url"
        name="url"
        autocomplete="off"
        @if(request()->routeIs('home')) autofocus @endif
        placeholder="Paste link"
        type="url"
        class="w-full px-5 py-5 rounded-3xl text-xl text-center text-zinc-500 bg-zinc-100 tracking-tighter placeholder:text-zinc-400 transition focus:outline-0 focus:bg-white focus:shadow-2xl focus:placeholder:text-zinc-500 focus:text-sky-600">
</form>

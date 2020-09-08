@extends('layouts.app')

@section('content')
<header class="pt-20 bg">
    <div class="container mx-auto">
        <div class="flex min-h-marketing">
            <div class="w-1/2 mt-4">
                <div class="w-2/3">
                    <h1 class="text-4xl font-extrabold leading-tight mb-3">Ever shortened your links? After this, <span class="text-pink-shrtn">you won't stop.</span></h1>
                    <p class="mb-4">Our award-winning research allows everyday people to shorten their long and nasty links. This AI-powered supertechnology, as we like to call it, is provided free-of-charge. Try today!</p>

                    <shorten />
                </div>
            </div>

            <div class="w-1/2 mt-6">
                <img src="./images/park.svg" alt="A graphic of a relaxing time in a park">
            </div>
        </div>
    </div>
</header>

<section class="container mx-auto triangles relative flex items-center">
    <div class="flex flex-wrap">
        <div class="w-full px-3 mb-4">
            <h1 class="block py-6 text-4xl font-extrabold leading-tight text-center">Why do I need this?</h1>
        </div>
        <div class="-mx-3 flex flex-wrap">
            <div class="w-1/3 px-3">
                <h2 class="text-3xl font-bold leading-tight">Long links are bad</h2>
                <p>Long links are bad. They are bad. How bad are they? Are they Windows Vista bad? No. iPhone 4 bad? Nope. They are Google Image Search bad.</p>
            </div>
            <div class="w-1/3 px-3">
                <h2 class="text-3xl font-bold leading-tight">Short links are good</h2>
                <p>Ever met Jack? He sends you links, the longest links. He even shares them to his Facebook. Don't be like Jack. Nobody likes Jack.</p>
            </div>
            <div class="w-1/3 px-3">
                <h2 class="text-3xl font-bold leading-tight">Well, nobody invented medium-sized links yet.</h2>
                <p>We were appalled when we found out that nobody invented medium-sized links. But we soon realized even we don't have the R&D budget for that.</p>
            </div>
        </div>
    </div>
</section>
@endsection

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlRequest;
use App\Url;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UrlController extends Controller
{
    /**
     * Store a new URL.
     *
     * @param  UrlRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UrlRequest $request)
    {
        $route = url('/');

        $url = Url::create(
            array_merge([
                'hash' => Str::random(5)
            ], $request->toArray())
        );

        $shorten = array_merge($url->toArray(), [
            'shortUrl' => $route . '/' . $url->hash,
            'baseUrl' => $route
        ]);

        $request->session()->push('shortened', $shorten);

        return redirect()->to(route('url.stats', ['url' => $url->hash]))->with(compact('shorten'));
    }
}

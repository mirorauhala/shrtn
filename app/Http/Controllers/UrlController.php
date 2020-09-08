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
     * Return a listing of shortened URLs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a new shortened URL in storage.
     *
     * @param  UrlRequest  $request
     * @return array
     */
    public function store(UrlRequest $request)
    {
        $route = url('/');

        $url = Url::create(
            array_merge([
                'hash' => Str::random(5)
            ], $request->toArray())
        );

        return array_merge($url->toArray(), [
            'absoluteUrl' => $route . '/' . $url->hash
        ]);
    }

    /**
     * Fetch the shortened URL.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(Url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Url $url)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url $url)
    {
        //
    }
}

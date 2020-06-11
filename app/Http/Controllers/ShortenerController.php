<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ShortenerController extends Controller
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
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'url' => 'required|url|unique:urls,url'
        ]);

        $route = url('/');

        $errors = $validator->errors();
        if($errors->first('url')) {
            $url = Url::where('url', $request->url)->firstOrFail();

            return array_merge($url->toArray(), [
                'absoluteUrl' => $route . '/' . $url->hash
            ]);
        }

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

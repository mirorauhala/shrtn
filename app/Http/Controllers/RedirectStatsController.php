<?php

namespace App\Http\Controllers;

use App\Url;
use App\Follow;
use Illuminate\Http\Request;

class RedirectStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Url $url)
    {
        $url->with('follows');

        return view('stats')->with([
            'url' => $url
        ]);
    }
}

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
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Url $url)
    {
        $url->with('follows');

        return view('stats')->with([
            'url' => $url
        ]);
    }
}

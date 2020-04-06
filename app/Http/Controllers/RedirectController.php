<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function __invoke(Url $url) {
        return redirect($url->url);
    }
}

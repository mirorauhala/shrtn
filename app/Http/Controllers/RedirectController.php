<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function __invoke(Url $url, Request $request) {
        $this->createNewFollow($url, $request);
        return redirect($url->url);
    }

    private function createNewFollow($url, $request) {
        $url->follows()->create([
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-agent'),
        ]);
    }
}

<?php

use App\Url;
use Illuminate\Support\Facades\Cache;

if(!function_exists("get_shortened_links_count")) {
    function get_shortened_links_count() : int {
        return Cache::remember('shortened_links_count', now()->addWeek(), function() {
            return Url::count();
        });
    }
}
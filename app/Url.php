<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $fillable = [
        'url',
        'hash'
    ];

    public function follows() {
        return $this->hasMany('App\Follow');
    }

    public function getRouteKeyName() {
        return 'hash';
    }

    public function getRouteKey() {
        return $this->hash;
    }
}

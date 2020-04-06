<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    public $fillable = [
        'ip',
        'user_agent'
    ];
}

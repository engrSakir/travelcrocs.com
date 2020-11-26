<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable =[
        'status',
        'name',
        'code',
        'flag',
        'alignment',
    ];
}

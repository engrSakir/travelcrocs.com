<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

if (!function_exists('random_code')){

    function languages(){
        return DB::table('languages')->get();
    }


}

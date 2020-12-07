<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function identity(){
        return view('administrative.setting.identity');
    }

    public function updateIdentity(){
        echo 'update Identity';
    }
}

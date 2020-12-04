<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailConfigController extends Controller
{
    public function smtpGetForm(){
        return view('administrative.smtp.index');
    }
}

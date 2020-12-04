<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailConfigController extends Controller
{
    public function smtpGetForm(){
        return view('administrative.smtp.index');
    }

    public function smtpPostForm(Request $request){
        $request->validate([
            'host' => 'required',
            'port' => 'required',
            'username' => 'required',
            'password' => 'required',
            'encryption' => 'required',
            'from_name' => 'required',
            'from_email' => 'required'
        ]);
        try {
            update_static_option('smtp_email_host', $request->input('host'));
            update_static_option('smtp_email_port', $request->input('port'));
            update_static_option('smtp_email_username', $request->input('username'));
            update_static_option('smtp_email_password', $request->input('password'));
            update_static_option('smtp_email_encryption', $request->input('encryption'));
            update_static_option('smtp_email_from_name', $request->input('from_name'));
            update_static_option('smtp_email_from_email', $request->input('from_email'));
            return redirect()->back()->withToastSuccess('Successfully SMTP updated!');
        }catch (\Exception $exception){
            return redirect()->back()->withErrors('Something going wrong. Error:'.$exception->getMessage());
        }

    }
}

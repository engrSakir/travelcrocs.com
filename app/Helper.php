<?php

use App\Language;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

if (!function_exists('random_code')){

    function allLanguages(){
        return Language::where('status', true)->get();
    }

    function activeLanguages(){
        return Language::where('status', true)->get();
    }

    function currentLanguage()
    {
        $locale = App::getLocale();
        return Language::where("code", $locale)->first();
    }

    function LangFromCode($code)
    {
        return Language::where("code", $code)->first();
    }

    //Generate access token and return
    function getAmadeusAccessToken(){
        $url = "https://test.api.amadeus.com/v1/security/oauth2/token";
        $response = Http::asForm()->post($url, [
            'grant_type' => 'client_credentials',
            'client_id' => 'pcnrYMNBPbZ2rVlUXES8j3AiAo1YEpiB',
            'client_secret' => 'qHe8Gbl2Z5Twzlkp'
        ]);
        return $response['access_token'];
        //{ "type": "amadeusOAuth2Token", "username": "m.sakirahmed@gmail.com", "application_name": "travelcrocs",
        // "client_id": "pcnrYMNBPbZ2rVlUXES8j3AiAo1YEpiB", "token_type": "Bearer", "access_token": "oTWaTkNdh5xAcvx0VJAypLJ1ZqBC",
        // "expires_in": 1799, "state": "approved", "scope": "" }
    }

    function createOrLogin($socialUser){
        if (User::where('email', $socialUser->email)->exists()){
            Auth::login(User::where('email', $socialUser->email)->first(), true);
        }else{
            $user = new User();
            $user->email        =   $socialUser->email;
            $user->name         =   $socialUser->name;
            $user->avatar       =   $socialUser->avatar;
            $user->password     =   Hash::make(Str::random(24));
            $user->api_token    =   Str::random(60);
            $user->save();
            Auth::login($user, true);
        }
        return redirect()->route('home');
    }

}

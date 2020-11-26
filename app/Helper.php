<?php

use App\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

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

}

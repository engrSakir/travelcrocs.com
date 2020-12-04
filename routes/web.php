<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

/***
 * @params lang-code
 * Lang switcher
 */
Route::get('/language/{languageCode}', 'LanguageController@languageSwitcher')->name('languageSwitcher');

/***
 * All of frontend routes
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function (){
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/user-type', 'NonPermittedUserController@index')->name('nonPermittedUser')->middleware('auth');
    Route::get('/user-type/{permission}', 'NonPermittedUserController@assignPermission')->name('assignPermission')->middleware('auth');
});

/***
 * All of authentication routes
 */
Route::group(['namespace' => 'Auth', 'as' => '', 'middleware'=>['guest']], function (){
    //Redirect to provider
    Route::get('/socialite/redirect/{driver}', 'SocialiteController@redirectToProvider')->name('socialiteLogin');
    //Call back
    Route::get('/socialite/callback/{driver}', 'SocialiteController@handleProviderCallback')->name('socialiteCallback');
});

/***
 * Authentication
 * Different type url of login screen
 */
Route::get('/admin',function (){ return redirect()->route('login'); });
Route::get('/administrative',function (){ return redirect()->route('login'); });
Route::get('/dashboard',function (){ return redirect()->route('login'); });

/***
 * HOME
 * Authorize person redirect from home route
 */
Route::get('/home',function (){
    if (auth()->user()->hasPermissionTo('user-access')){
        return redirect()->route('user.dashboard.index');
    }elseif (auth()->user()->hasPermissionTo('provider-access')){
        return redirect()->route('provider.dashboard.index');
    }elseif (auth()->user()->hasPermissionTo('administrative-access')){
        return redirect()->route('administrative.dashboard.index');
    }else{
        session()->flash('message', 'Non-permitted user.');
        session()->flash('type', 'danger');
        //Auth::logout();
        return redirect()->route('frontend.nonPermittedUser');
    }
})->name('home');

/***
 * All of administrative routes
 */
Route::group(['namespace' => 'Administrative', 'as' => 'administrative.', 'prefix'=>'administrative', 'middleware'=>['permission:administrative-access', 'auth', 'verified']], function (){
    //Dashboard route: administrative.dashboard.index
    Route::resource('dashboard', 'DashboardController');
    Route::resource('user', 'UserController');
    Route::resource('provider', 'ProviderController');
    Route::group(['prefix'=>'application'], function (){
        Route::resource('language', 'LanguageController');
    });

    Route::group(['prefix'=>'application'], function (){
        Route::group(['prefix'=>'mail'], function (){
            Route::get('/smtp', 'EmailConfigController@smtpGetForm')->name('smtp.index');
            Route::post('/smtp', 'EmailConfigController@smtpPostForm')->name('smtp.update');
        });
    });


});

/**
 * All of vendors routes
 */
Route::group(['namespace' => 'Provider', 'as' => 'provider.', 'prefix'=>'provider', 'middleware'=>['permission:provider-access', 'auth', 'verified']], function (){
    //Dashboard route: provider.dashboard.index
    Route::resource('dashboard', 'DashboardController');

});


/**
 * All of user routes
 */
Route::group(['namespace' => 'User', 'as' => 'user.', 'prefix'=>'user', 'middleware'=>['permission:user-access', 'auth', 'verified']], function (){
    //Dashboard route: user.dashboard.index
    Route::resource('dashboard', 'DashboardController');

});


//Jhumu

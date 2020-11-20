<?php

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

Auth::routes();

//Frontend
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function (){
    Route::get('/', 'IndexController@index')->name('index');
});

//# Authentication
Route::get('/admin',function (){ return redirect()->route('login'); });
Route::get('/administrative',function (){ return redirect()->route('login'); });
Route::get('/dashboard',function (){ return redirect()->route('login'); });

//Authorize route
Route::get('/home',function (){ return redirect()->route('administrative.dashboard.index'); });
//Administrative Routes
Route::group(['namespace' => 'Administrative', 'as' => 'administrative.', 'prefix'=>'administrative', 'middleware'=>['permission:administrative-access', 'auth']], function (){
    //Dashboard route: administrative.dashboard.index
    Route::resource('dashboard', 'DashboardController');
});

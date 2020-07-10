<?php

use Illuminate\Support\Facades\DB;
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

//DB::listen(function($query){dd($query->sql, $query->bindings);});


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::post('/tweets', 'TweetsController@store')->name('create.tweet');
    Route::get('/tweets', 'TweetsController@index')->name('home');

    Route::get('/profiles/{user:name}/edit','ProfilesController@edit')->name('edit.user')->middleware('can:update,user');
    Route::post('/profiles/{user:name}/follow','FollowsController@store')->name('follow');

});


Route::get('/profiles/{user:name}','ProfilesController@show')->name('profile');

Auth::routes();


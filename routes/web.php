<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/oauth/yandex', function () {
    return Socialite::driver('yandex')->redirect();
})->name('oauth.yandex');

Route::get('/oauth/yandex/callback', function () {
    return 'You are correctly reached Yandex callback route!';
})->name('oauth.yandex.callback');

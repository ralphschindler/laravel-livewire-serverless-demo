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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/debug', function () {
    dump('app config', config('app'));
    dump('livewire config ', config('livewire'));

    unset($_ENV['AWS_ACCESS_KEY_ID'], $_ENV['AWS_SECRET_ACCESS_KEY'], $_ENV['AWS_SESSION_TOKEN']);

    dump('_ENV', $_ENV);
    dump('Livewire Scripts', \Livewire::scripts());
});

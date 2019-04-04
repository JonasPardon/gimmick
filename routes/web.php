<?php

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

Route::get('/cp', function() {
    return view('index');
});

Route::get('/cp/{path}', function() {
   return view('backend.app');
})->where('path', '(.*)');

Route::get('/{slug}', 'PageController@show');

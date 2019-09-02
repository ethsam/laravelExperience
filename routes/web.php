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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test.html', function () {
    return view('test');
});

Route::get('/blog.html', function () {
    return view('blog');
});

Route::get('/hotels.html', function () {
    return view('hotels');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription', function () {
    return 'Votre email est ' . $_POST['email'];
});

Route::get('produits', [

    'as' => 'hotels.index',

    'uses' => 'HotelsController@index',

]);

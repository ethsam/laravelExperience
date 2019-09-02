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
    request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirm' => ['required'],
    ]);

    $utilisateur = App\Utilisateur::create([
        'email' => request('email'),
        'mot_de_passe' => bcrypt(request('password')),
    ]);

    return "Nous avons reçu votre email qui est " . request('email') . ' et votre mot de passe est ' . request('password');
});

Route::get('produits', [

    'as' => 'hotels.index',

    'uses' => 'HotelsController@index',

]);

Route::get('/utilisateurs', function () {
    $utilisateurs = App\Utilisateur::all();

    return view('utilisateurs', [
        'utilisateurs' => $utilisateurs
    ]);
});

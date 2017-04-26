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
    return view('index');
});

Route::get('/admin', function () {
    return view('administrador.login');
});
Route::get('/calendario', function () {
    return view('administrador.calendario');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/banner-principal', 'AdminController@bannerPrincipal');
Route::get('/servicios', 'AdminController@servicios');
Route::get('/noticias', 'AdminController@noticias');
Route::get('/eventos', 'AdminController@eventos');
Route::get('/canciones', 'AdminController@canciones');
Route::get('/galeria', 'AdminController@galeria');
Route::get('/instagram', 'AdminController@instagram');

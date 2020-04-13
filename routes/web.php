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

Route::get('/prb', function () {
    return view('Usuario.view-profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/user/image/{filename}', 'UsuarioController@getImage')->name('usuario.imagen');
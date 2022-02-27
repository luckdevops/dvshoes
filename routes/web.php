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
})->name('home');

Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@authenticate')->name('login.autenticar');
Route::get('/sair', 'Auth\LoginController@logout')->name('logout');

Route::post('/create', 'Auth\RegisterController@create')->name('user.create');

Route::get('/logout','Auth\LoginController@logout');

Route::get('/pesquisa', function () {
    return view('pesquisa');
})->name('pesquisa');

Route::get('/validacao/{token_validacao}','Auth\EmailController@validaEmail');

Route::get('/validaemail', function () {
      return view('mail/validacao-email');
 })->name('validaemail');

Route::get('/confirmaemail', function () {
    return view('mail/confirm-email');
});

?>

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
Route::get('/institucional', function(){
    return view('site.institucional');
});

Route::get('/servicos', function () {
    return view('site.servicos');
});

Route::get('/contato', function () {
    return view('site.contato');
});

Route::get('/vendaseuresiduo', function () {
    return view('site.vendaseuresiduo');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/index', 'HomeController@home')->name('index');
Route::post('/institucional', 'HomeController@institucional')->name('institucional');
Route::post('/servicos', 'HomeController@servicos')->name('servicos');
Route::post('/venda', 'HomeController@venda_texto')->name('venda');
Route::post('/contato', 'HomeController@contato')->name('contato');
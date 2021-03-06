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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('produtos','ProdutoController');

Route::resource('pontosdados','PontoDadosController');

Route::resource('opcaos','OpcaoController');
Route::get('/opcaos/{produto}/create','OpcaoController@create')->name('opcaos.create');
Route::post('/opcaos/{produto}','OpcaoController@store')->name('opcaos.store');

Route::resource('users','UserController')->middleware(['auth','admin']);

Route::get('/notauth', function () {
	return view('notauth');
	})->name('notauth');

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

Route::get('/administrador', 'PaginasController@admin');
Route::get('/pacientes', 'PaginasController@cliente');

Route::get('/', function () {
    return view('/procedimentos');
});

Route::get('/about', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/procedimentos', 'ProcedureController');
Route::resource('/users', 'UserController');
Route::resource('/testes', 'TestController');

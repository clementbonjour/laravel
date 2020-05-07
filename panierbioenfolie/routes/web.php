<?php

<<<<<<< HEAD
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

Route::get('/', 'FirstController@index');
Route::get('/about', 'FirstController@about');
Route::get('/recette', 'FirstController@recette');
Route::get('/abonnements', 'FirstController@abonnements');
Route::get('/moncompte', 'FirstController@moncompte');
Route::get('/contact', 'FirstController@contact');
Route::get('/article/{id}','FirstController@article')->where('id','[0-9]+');
=======
Route::get('/','FirstController@index');
Route::get('/about','FirstController@about');
Route::get('/article/{id}','FirstController@article')->where('id','[0-9]+');
Route::get('/recette','FirstController@recette');
>>>>>>> 31924ef2955dd4eea8c19f79eff8db577e97c224

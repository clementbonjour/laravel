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

Route::get('/', 'IndexController@index')->name('home');
Route::get('/home', 'IndexController@index')->name('home');
Route::get('/recette', 'RecetteController@recette')->name('recette');
Route::get('/recette/{id}', 'RecetteController@unerecette')->where('id', '[0-9]+');
Route::get('/abonnement/{idUser}', 'AbonnementController@abonnement')->name('abonnement');
Route::get('/commentcamarche', 'IndexController@comment')->name('commentcamarche');
Route::get('/contact', 'ContactController@contact')->name('contact');

Route::get('/compte', 'Comptecontroller@compte')->name('compte');


Route::get('/ajoutRecette/create', 'Comptecontroller@ajoutRecette')->name('ajoutRecetteCreate');
Route::post('/ajoutRecette', 'CompteController@store');

Route::get('/ajoutAbonnement/create', 'AbonnementController@ajoutAbonnement')->name('ajoutAbonnement');
Route::post('/ajoutAbonnement/{idUser}', 'AbonnementController@store');

Route::get('/choix/create/{idUser}', 'ChoixController@ajoutChoix')->name('choix');
Route::post('/ajoutChoix/{idUser}', 'ChoixController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

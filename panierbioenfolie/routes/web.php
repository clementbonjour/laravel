<?php

Route::get('/','FirstController@index');
Route::get('/about','FirstController@about');
Route::get('/article/{id}','FirstController@article')->where('id','[0-9]+');
Route::get('/recette','FirstController@recette');

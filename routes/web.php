<?php

Route::view('/', "enunciado");


Route::get('/clientes', ['as'=>'clientes','uses'=>'ClientesController@index']);
Route::get('/hotels', ['as'=>'hotels','uses'=>'HotelsController@index']);
Route::get('/reservas/{{id}}', ['as'=>'reservas','uses'=>'ClientesController@list']);







<?php

Route::get('acerca', 'PaginasController@acerca');
Route::get('contacto', 'PaginasController@contacto');

Route::get('articulos', 'ArticulosController@index');
Route::get('articulos/crear' , 'ArticulosController@create');
Route::get('articulos/{id}', 'ArticulosController@show');
Route::post('articulos' , 'ArticulosController@store');





<?php

Route::get('acerca', 'PaginasController@acerca');
Route::get('contacto', 'PaginasController@contacto');

Route::resource('articulos' , 'ArticulosController');

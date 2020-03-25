<?php

Route::get('/', 'PastelController@muestra');
Route::get('/edita/{id}', 'PastelController@editaPastel');
Route::get('/borra/{id}', 'PastelController@borra');

Route::post('/guardaPastel','PastelController@guardaPastel');
Route::post('/GuardaEdicion','PastelController@GuardaEdicion');

Route::resource('cliente', 'ClienteController');

<?php

Route::get('/', 'Atomcorp\Http\Controllers\MainController@getHome');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/que-buscamos', function () {
    return view('que-buscamos');
});

Route::get('/establishment/{id}', 'Atomcorp\Http\Controllers\MainController@getEstablishment')->where('id', '[0-9]+');;

Route::get('/establishments', 'Atomcorp\Http\Controllers\MainController@getEstablishments');

<?php

Route::get('/', 'Atomcorp\Http\Controllers\HomeController@getHome');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

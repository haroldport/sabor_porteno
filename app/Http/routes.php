<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

<?php

Route::get('/', function () {
    return view('commingsoon');
});

Route::get('/staff_registration', function () {
    return view('staff_registration');
});

Route::get('/registration', function () {
    return view('competition_registration');
});

Route::get('/upload', function () {
    return view('upload_competition');
});
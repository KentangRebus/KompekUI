<?php

Route::get('/', function () {
    return view('commingsoon');
});

Route::get('/staff_registration', function () {
    return view('staff_registration');
});

<?php

Route::get('/', function () {
    return view('commingsoon');
});

Route::get('/Home', function () {
    return view('home');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});
Route::get('/StaffRegistrationForm', function () {
    return view('staffregis');
});
Route::get('/CompetitionRegistration', function () {
    return view('competitionregis');
});
Route::get('/LoginAdminKompek', function () {
    return view('adminlogin');
});

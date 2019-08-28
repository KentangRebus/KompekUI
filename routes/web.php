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
Route::get('/UploadAnswer', function () {
    return view('uploadanswer');
});

//admin site
Route::get('/LoginAdminKompek', function () {
    return view('adminlogin');
});

Route::get('/AdminKompekPage/Participant', function () {
    return view('adminparticipant');
})->middleware('adminAuth');

Route::get('/AdminKompekPage/Case', function () {
    return view('admincase');
})->middleware('adminAuth');

Route::get('/AdminKompekPage/Answer', function () {
    return view('adminanswer');
})->middleware('adminAuth');

Route::get('/AdminKompekPage/Announcement', function () {
    return view('adminannouncement');
})->middleware('adminAuth');

Route::get('/AdminKompekPage/Staff', function () {
    return view('adminstaff');
})->middleware('adminAuth');

//Route::group(['middleware' => ['web']], function (){
//});




//Route::middlewawre('nama')->group(function(){
//
//});
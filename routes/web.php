<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('commingsoon');
});

Route::get('/Home', 'HomeController@index');

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

Route::post('LoginAdminKompek', 'AdminController@find')->middleware('web');

Route::group(['middleware' => ['web', 'adminAuth']], function (){

    Route::get('/AdminKompekPage/Participant', function () {
        return view('adminparticipant');
    });

    Route::resource('/AdminKompekPage/Case', 'CasefileController');

    Route::get('/AdminKompekPage/Answer', function () {
        return view('adminanswer');
    });

    Route::resource('/AdminKompekPage/Announcement', "AnnouncementController");
    Route::get('/AdminKompekPage/AnnouncementDelete/{id}', "AnnouncementController@destroy");

    Route::get('/AdminKompekPage/Staff', function () {
        return view('adminstaff');
    });

    Route::get('/AdminKompekPage/LogOut', 'AdminController@logOut');
    
});




//Route::middlewawre('nama')->group(function(){
//
//});
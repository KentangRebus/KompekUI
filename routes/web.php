<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' =>['checkStaffRegis']], function(){
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
    Route::post('/Participant', "ParticipantController@store");

    Route::get('/UploadAnswer', function () {
        return view('uploadanswer');
    });
    Route::get('/Form/Download', 'DownloadController@dlRegistrationForm');
});

//admin site
Route::get('/LoginAdminKompek', function () {
    return view('adminlogin');
});

Route::post('LoginAdminKompek', 'AdminController@find')->middleware('web');

Route::group(['middleware' => ['web', 'adminAuth', 'checkStaffRegis']], function (){

    Route::resource('/AdminKompekPage/Participant', "ParticipantController");
    Route::get('/AdminKompekPage/ParticipantList', "ParticipantController@showByCompetition");
    Route::get('/AdminKompekPage/ParticipantDelete/{id}',"ParticipantController@destroy");

    Route::resource('/AdminKompekPage/Case', 'CasefileController');

    Route::get('/AdminKompekPage/Answer', function () {
        return view('adminanswer');
    });

    Route::resource('/AdminKompekPage/Announcement', "AnnouncementController");
    Route::get('/AdminKompekPage/AnnouncementDelete/{id}', "AnnouncementController@destroy");

    Route::resource('/AdminKompekPage/Staff', "StaffController");
    Route::get('/AdminKompekPage/StaffDelete/{id}', "StaffController@destroy");

    Route::get('/AdminKompekPage/StaffRegisStatus', 'StatusController@changeStatus');

    Route::get('/AdminKompekPage/LogOut', 'AdminController@logOut');
    Route::get('/AdminKompekPage/Download/Participant', 'DownloadController@dlParticipantFile');
});




//Route::middlewawre('nama')->group(function(){
//
//});
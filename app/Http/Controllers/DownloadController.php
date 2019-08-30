<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    function dlRegistrationForm(){
        return Storage::download('/form/dummyFile.pdf');
//        return redirect('/CompetitionRegistration');
    }

}

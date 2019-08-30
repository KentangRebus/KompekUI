<?php

namespace App\Http\Controllers;

use Chumper\Zipper\Zipper;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    function dlRegistrationForm(){
        return Storage::download('/form/dummyFile.pdf');
//        return redirect('/CompetitionRegistration');
    }

    function dlParticipantFile(){
        $dst = 'storage/app/participantFile.zip';

        $zipper = new Zipper();
        $zipper->make($dst)->add('../storage/app/participant')->close();

        return response()->download($dst);
    }

}

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
        $src = '../storage/app/';
        $dst = 'participantFile.zip';

//        $zipper = new Zipper();
//        $zipper->make($dst)->folder($src)->add($src);
//        $zipper->close();
        $zip = new Zipper();
        $zip->make($dst)->folder('participant')->add($src)->close();

        return Storage::download($dst);
    }

}

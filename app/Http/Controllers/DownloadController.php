<?php

namespace App\Http\Controllers;

use Chumper\Zipper\Zipper;
use Illuminate\Support\Facades\DB;
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

    function dlParticipantCase($case){
        $data = DB::table('casefile')->where('competition', $case)->first();
        $path = '../storage/app'.$data->path;

        return response()->download($path);
    }

}

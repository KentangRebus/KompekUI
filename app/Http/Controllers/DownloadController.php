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
        $zipName = uniqid();
        $dst = 'storage/app/'.$zipName.'.zip';
//        $dst = 'storage/app/participantFile.zip';

        $zipper = new Zipper();
        $zipper->make($dst)->add('../storage/app/participant')->close();

        return response()->download($dst);
    }

    function dlParticipantCase($case){
        $data = DB::table('casefile')->where('competition', $case)->first();
        $path = '../storage/app'.$data->path;

        return response()->download($path);
    }

//    buat download participant answernya
    function dlParticipantAnswer($participant_school, $participant_1, $participant_1_email){

        $data = DB::table('participant')
            ->where('participant_school', $participant_school)
            ->where('participant_1', $participant_1)
            ->where('participant_1_email', $participant_1_email)
            ->first();

        if($data == null)
            return redirect('/AdminKompekPage/Answer');

        $dst = "storage/app/".$participant_school.$participant_1.".zip";

        $zipper = new Zipper();
        $zipper->make($dst)->add('../storage/app/answer/'.$participant_school.$participant_1)->close();

        return response()->download($dst);
    }

    function dlAllParticipantAnswer(){
        $dst = 'storage/app/AllAnswer.zip';

        $zipper = new Zipper();
        $zipper->make($dst)->add('../storage/app/answer')->close();

        return response()->download($dst);
    }

}

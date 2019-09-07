<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Mail;
use App\Participant;
use App\RegistrationDetail;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Participant::all();

        return view('adminparticipant')->with("data", $data);
    }

    public function showByCompetition(Request $request)
    {
        $value = $request->competition;

        if ($value == 0) {
            $data = Participant::all();
        } else {
            $data = Participant::with('competitions')
                ->whereHas('competitions', function ($query) use ($value) {
                    $query->where('competition.competition_id', $value);
                })
                ->get();
        }

        return view('adminparticipant')->with("data", $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'payment_file' => 'required|mimes:pdf|max:300000',
            'regis_file' => 'required|mimes:pdf|max:300000',
        ]);

        $data = new Participant();
        $data->participant_school = $request->school;
        $data->participant_teacher = $request->teacher;
        $data->participant_1 = $request->head;
        $data->participant_1_email = $request->email;
        $data->participant_2 = $request->participant_2;
        $data->participant_3 = $request->participant_3;
        $data->participant_phone = $request->phone;
        $data->payment_proof = "true";
        $data->registration_form = "true";
        $data->save();

        $detail = new RegistrationDetail();
        $detail->participant_id = $data->participant_id;
        $detail->competition_id = $request->competition;
        $detail->save();

        $folderName = $request->school . $request->head;

        $paymentFile = $request->file('payment_file');
        $paymentFile->storeAs('/participant/' . $folderName, 'PaymentFile.pdf');

        $regisFile = $request->file('regis_file');
        $regisFile->storeAs('/participant/' . $folderName, 'RegisterForm.pdf');

        try {
            Mail::send('email', ["msg" => ""], function ($msg) use ($request) {
                $msg->subject("Konfirmasi Penerimaan Formulir Pendaftaran KOMPeK 22");
                $msg->from('public.relation@kompek-febui.com', 'Public Relation KOMPeK 22');
                $msg->to($request->email);
            });
        } catch (Exception $e) {
            // return response (['status' => false,'errors' => $e->getMessage()]);
        }

        $comp = ['EQ', 'EDC', 'BC', 'ERP'];
        $case = $comp[$request->competition - 1];
        return redirect("/Case/$case");

//        return redirect('/Home');
    }

    public function uploadCompetition(Request $request)
    {
        $request->validate([
            'credential_letter' => 'required|mimes:zip,rar|max:300000',
            'competition_file' => 'required|mimes:zip,rar|max:300000',
        ]);

        $folderName = $request->school . $request->head;

        $participant = Participant::where('participant_school', '=', $request->school)
            ->where('participant_1', '=', $request->head)
            ->where('participant_1_email', '=', $request->email);

        if ($participant->exists()) {
            $id = $participant->first()->participant_id;
            $curr_participant = Participant::find($id);

            $curr_participant->competition_file = "true";
            $curr_participant->credential_file = "true";
            $curr_participant->save();

            $competition_file = $request->file('competition_file');
            $competition_file->storeAs('/answer/' . $folderName, 'competition_file.zip');

            $credentialLetter = $request->file('credential_letter');
            $credentialLetter->storeAs('/answer/' . $folderName, 'credential_letter.zip');

            return redirect('UploadAnswer')->with('msg', "Success Upload Answer");
        }

//        return redirect('UploadAnswer');
    }

    public function showAnswers(){

        $data = Participant::where("competition_file", "true")
                            ->where("credential_file", "true")
                            ->with("competitions")
                            ->get();

        return view('adminanswer')->with("data", $data);
    }

    public function deleteAnswer($id){

        $participant = Participant::find($id);
        $participant->competition_file = "false";
        $participant->credential_file = "false";
        $participant->save();

        return redirect('AdminKompekPage/Answer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Participant::find($id);

        Storage::deleteDirectory('participant/'.$data->participant_school.$data->participant_1);
        Participant::destroy($id);
        return redirect('AdminKompekPage/Participant');
    }
}

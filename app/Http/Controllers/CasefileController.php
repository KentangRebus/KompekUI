<?php

namespace App\Http\Controllers;

use App\Casefile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CasefileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Casefile::all();
        return view('admincase')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        find file already exist or not
        $exist = DB::table('casefile')->where('competition', $request->competition)->first();

        if($exist){
         $dat = Casefile::find($exist->id);
         $dat->delete();
        }

        $request->validate([
            'file' => 'required|mimes:pdf|max:300000',
        ]);

        $file = $request->file('file');
        $file->storeAs('cases', $file->getClientOriginalName());

        $data = new Casefile();
        $data->path = '/cases/'.$file->getClientOriginalName();
        $data->file_name = $file->getClientOriginalName();
        $data->competition = $request->competition;

        $data->save();

//        return view('admincase')->with('data', Casefile::all());
        return redirect('/AdminKompekPage/Case');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Casefile  $casefile
     * @return \Illuminate\Http\Response
     */
    public function show(Casefile $casefile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Casefile  $casefile
     * @return \Illuminate\Http\Response
     */
    public function edit(Casefile $casefile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Casefile  $casefile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casefile $casefile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Casefile  $casefile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casefile $casefile)
    {
        //
    }
}

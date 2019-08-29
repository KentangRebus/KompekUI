<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Staff::all();

        foreach ($data as $d){
            $time[] = explode(',',$d->time_available,5);
        }

        return view('adminstaff')->with("data", $data)->with("time", $time);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Staff();
        $data->staff_name = $request->staff_name;
        $data->staff_student_id = $request->staff_student_id;
        $data->staff_program = $request->program;
        $data->staff_phone= $request->phone;
        $data->staff_line= $request->line;
        $data->choice_1 = $request->choiceOne;
        $data->choice_2 = $request->choiceTwo;
        $data->choice_3 = $request->choiceThree;
        $available_time = $request->time;
        $time = $available_time[0];

        if($data->choice_1 == $data->choice_2 || $data->choice_1 == $data->choice_3 || $data->choice_2 == $data->choice_3){
            return view('staffregis')->with("err_message","Please choose 3 different choices");
        }

        if(count($available_time) < 5){
           return view('staffregis')->with("message","Please select minimal 5 time");
        }

        for($i = 1; $i < count($available_time); $i++){
            $time = $time.','.$available_time[$i];
        }

        $data->time_available = $time;
        $data->save();

        return redirect('Home')->with("successMessage", "Success Register");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::destroy($id);

        return redirect('AdminKompekPage/Staff');
    }
}

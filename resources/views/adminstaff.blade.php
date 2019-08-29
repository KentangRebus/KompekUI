@extends('layouts.admintemplate')

@section('adminMoreLink')

@stop

@section('adminMoreScript')

@stop

@section('adminContent')

    <div>
        <h1 class="text-center mt-3">Manage Staff</h1>

        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Name</th>
                <th scope="col">Program</th>
                <th scope="col">Phone</th>
                <th scope="col">Line</th>
                <th scope="col">Choice</th>
                <th scope="col">Interview</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($data); $i++)
                <tr>
                    <form method="get" action="{{url("/AdminKompekPage/StaffDelete/".$data[$i]->staff_id)}}">
                        @csrf
                        <td>{{$data[$i]->staff_student_id}}</td>
                        <td>{{$data[$i]->staff_name}}</td>
                        <td>{{$data[$i]->staff_program}}</td>
                        <td>{{$data[$i]->staff_phone}}</td>
                        <td>{{$data[$i]->staff_line}}</td>
                        <td>
                            <ol style="padding-left: 0">
                                <li>{{$data[$i]->choice_1}}</li>
                                <li>{{$data[$i]->choice_2}}</li>
                                <li>{{$data[$i]->choice_3}}</li>
                            </ol>
                        </td>
                        <td>
                            <ul style="padding-left: 0">
                                <li>{{$time[$i][0]}}</li>
                                <li>{{$time[$i][1]}}</li>
                                <li>{{$time[$i][2]}}</li>
                                <li>{{$time[$i][3]}}</li>
                                <li>{{$time[$i][4]}}</li>
                            </ul>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </form>
                </tr>
            @endfor
            </tbody>
        </table>

    </div>

@stop
@extends('layouts.admintemplate')

@section('adminMoreLink')

@stop

@section('adminMoreScript')

@stop

@section('adminContent')
    <div class="pl-4 pr-2">
        <h1 class="text-center mt-3">Manage Answer</h1>
        <div class="mt-5 mb-3">
            <form action="/AdminKompekPage/Download/AllAnswer">
                <button type="submit" class="btn btn-primary">Download All Answer</button>
            </form>
        </div>
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">School</th>
                <th scope="col">Head Name</th>
                <th scope="col">Head Email</th>
                <th scope="col">Competition</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($data); $i++)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$data[$i]->participant_school}}</td>
                    <td>{{$data[$i]->participant_1}}</td>
                    <td>{{$data[$i]->participant_1_email}}</td>
                    @foreach($data[$i]->competitions as $competition)
                        <td>{{$competition->competition_name}}</td>
                    @endforeach
                    <td>
                        <form action="{{url("/AdminKompekPage/AnswerDelete/".$data[$i]->participant_id)}}" method="get" class="mb-1">
                            <button type="submit" class="btn btn-outline-danger" style="min-width: 90px">Delete</button>
                        </form>
                        <form action="/AdminKompekPage/Download/Answer/{{$data[$i]->participant_school}}/{{$data[$i]->participant_1}}/{{$data[$i]->participant_1_email}}">
                            <button type="submit" class="btn btn-outline-success">Download</button>
                        </form>
                    </td>
                </tr>
            @endfor
            </tbody>
        </table>

    </div>
@stop
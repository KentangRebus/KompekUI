@extends('layouts.admintemplate')

@section('adminContent')
    <div class="p-4">
        <h1 class="text-center mb-5">Manage Participant</h1>

        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">School</th>
                <th scope="col">Head Name</th>
                <th scope="col">Head Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Competition</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($data); $i++)
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$data[$i]->participant_school}}</td>
                    <td>{{$data[$i]->participant_1}}</td>
                    <td>{{$data[$i]->participant_1_email}}</td>
                    <td>{{$data[$i]->participant_phone}}</td>
                    @foreach($data[$i]->competitions as $competition)
                        <td>{{$competition->competition_name}}</td>
                    @endforeach
                    <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endfor

            </tbody>
        </table>

    </div>
@stop
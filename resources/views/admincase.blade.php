@extends('layouts.admintemplate')

@section('adminMoreLink')

@stop

@section('adminMoreScript')

@stop

@section('adminContent')
    <div class="pl-5 pr-5 pt-3">
        <h1 class="text-center">Manage Case</h1>

        <form action="/AdminKompekPage/Case" method="post" enctype="multipart/form-data" class="pl-5 pr-5">
            @csrf
            <div class="form-group pb-1">
                <label for="inputState">Competition</label>
                <select id="inputState" class="form-control" name="competition">
                    <option selected>Choose...</option>
                    <option value="EQ">EQ</option>
                    <option value="BC">BC</option>
                    <option value="EDC">EDC</option>
                    <option value="ERP">ERP</option>
                </select>
            </div>
            <div class="form-group pb-1">
                <input type="file" name="file" id="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="mt-4">
            <table class="table table-hover">
                <thead class="thead-light">
                <tr>
                    <th scope="col">File Name</th>
                    <th scope="col">Uploaded at</th>
                    <th scope="col">Competition</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $d)
                <tr>
                    <td>{{$d->file_name}}</td>
                    <td>{{$d->created_at}}</td>
                    <td>{{$d->competition}}</td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@stop
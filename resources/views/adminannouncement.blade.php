@extends('layouts.admintemplate')

@section('adminMoreLink')

@stop

@section('adminMoreScript')

@stop

@section('adminContent')
    <div>
        <h1 class="text-center mt-3 mt-4">Manage Announcement</h1>

        <form action="{{url("/AdminKompekPage/Announcement")}}" method="post" class="mt-4" style="width: 70%; margin: 0 auto;">
            @csrf
            <div class="form-group">
                <label>What the news ?</label>
                <textarea name="announcement" class="form-control" id="" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>

        <div class="mt-3 pl-3 pr-3">
            <table class="table table-hover">
                <thead class="thead-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Announcement</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i < count($data); $i++)
                    <tr>
                        <form method="get" action="{{url("/AdminKompekPage/AnnouncementDelete/".$data[$i]->announcement_id)}}">
                            <th scope="row">{{$i+1}}</th>
                            <td> {{$data[$i]->announcement}} </td>
                            <td> {{$data[$i]->created_at}} </td>
                            <td>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </td>
                        </form>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>

    </div>
@stop
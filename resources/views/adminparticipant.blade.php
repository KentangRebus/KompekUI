@extends('layouts.admintemplate')

@section('adminContent')
    <div class="p-4">
        <h1 class="text-center mb-5">Manage Participant</h1>

        <div class="form-inline">
            <div>
                <form action="/AdminKompekPage/Download/Participant">
                    <button type="submit" class="btn btn-outline-success mb-2">Download Participant File</button>
                </form>
            </div>
            <div style="margin-left: auto">
                <form action="/AdminKompekPage/ParticipantList" method="get" class="form-inline">
                    <select id="competition_option" class="form-control mb-2 mr-3" name="competition">
                        <option value = "0"> All </option>
                        <option value = "1"> EQ </option>
                        <option value = "2"> EDC </option>
                        <option value = "3"> BC </option>
                        <option value = "4"> ERP </option>
                    </select>
                    <button type="submit" class="btn btn-primary mb-2" onclick="setOption()">Filter</button>
                </form>
            </div>
        </div>
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">School</th>
                <th scope="col">Head Name</th>
                <th scope="col">Head Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Competition</th>
                <th scope="col">Payment</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($data); $i++)
                <tr>
                    <form method="get" action="{{url("/AdminKompekPage/ParticipantDelete/".$data[$i]->participant_id)}}">
                        <th scope="row">{{$i+1}}</th>
                        <td>{{$data[$i]->participant_school}}</td>
                        <td>{{$data[$i]->participant_1}}</td>
                        <td>{{$data[$i]->participant_1_email}}</td>
                        <td>{{$data[$i]->participant_phone}}</td>
                        @foreach($data[$i]->competitions as $competition)
                            <td>{{$competition->competition_name}}</td>
                        @endforeach
                        <td>
                            <button type="submit" onclick="asd()" class="btn btn-danger">Delete</button>
                        </td>
                    </form>
                </tr>
            @endfor

            </tbody>
        </table>
    </div>
    <script>

        @if(isset($_GET["competition"]))
            $value = {{$_GET["competition"]}};
        @else
            $value = 0;
        @endif

        var val = $value;
        document.getElementById("competition_option").value = val;

    </script>

@stop
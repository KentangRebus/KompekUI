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
                <th scope="col">Telephone</th>
                <th scope="col">Competition</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>

            </tbody>
        </table>

    </div>
@stop
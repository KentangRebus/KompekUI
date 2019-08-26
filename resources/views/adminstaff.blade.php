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
            <tr>
                <td>0000000000</td>
                <td>Otto</td>
                <td>Accounting</td>
                <td>+6287720291347</td>
                <td>xxxxxxxxxxxxxxx</td>
                <td>
                    <ol style="padding-left: 0">
                        <li>Transport and Accomodation</li>
                        <li>Transport and Accomodation</li>
                        <li>Transport and Accomodation</li>
                    </ol>
                </td>
                <td>
                    <ul style="padding-left: 0">
                        <li>Mo 1</li>
                        <li>Tu 2</li>
                        <li>Th 2</li>
                        <li>We 2</li>
                        <li>Fr 2</li>
                    </ul>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>0000000000</td>
                <td>Otto</td>
                <td>Accounting</td>
                <td>+6287720291347</td>
                <td>xxxxxxxxxxxxxxx</td>
                <td>
                    <ol style="padding-left: 0">
                        <li>Transport and Accomodation</li>
                        <li>Transport and Accomodation</li>
                        <li>Transport and Accomodation</li>
                    </ol>
                </td>
                <td>
                    <ul style="padding-left: 0">
                        <li>Mo 1</li>
                        <li>Tu 2</li>
                        <li>Th 2</li>
                        <li>We 2</li>
                        <li>Fr 2</li>
                    </ul>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>

            </tbody>
        </table>

    </div>

@stop
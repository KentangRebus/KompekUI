@extends('layouts.admintemplate')

@section('adminMoreLink')

@stop

@section('adminMoreScript')

@stop

@section('adminContent')
    <div class="pl-4 pr-2">
        <h1 class="text-center mt-3">Manage Answer</h1>
        <div class="mt-5 mb-3">
            <form action="">
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
                <tr>
                    <td>1</td>
                    <td>BINUS</td>
                    <td>Budi</td>
                    <td>budi@gmail.com</td>
                    <td>EQ</td>
                    <td>
                        <form action="" class="mb-1">
                            <button type="button" class="btn btn-outline-danger" style="min-width: 90px">Delete</button>
                        </form>
                        <form action="">
                            <button type="button" class="btn btn-outline-success">Download</button>
                        </form>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
@stop
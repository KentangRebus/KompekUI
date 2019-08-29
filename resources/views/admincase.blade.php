@extends('layouts.admintemplate')

@section('adminMoreLink')

@stop

@section('adminMoreScript')

@stop

@section('adminContent')
    <div class="pl-5 pr-5 pt-3">
        <h1 class="text-center">Manage Case</h1>

        <form action="" method="post" enctype="multipart/form-data" class="pl-5 pr-5">
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
                <tr>
                    <td>Soal BC</td>
                    <td>12/2/2019</td>
                    <td>BC</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@stop
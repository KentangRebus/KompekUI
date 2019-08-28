@extends('layouts.admintemplate')

@section('adminMoreLink')

@stop

@section('adminMoreScript')

@stop

@section('adminContent')
    <div>
        <h1 class="text-center mt-3 mt-4">Manage Announcement</h1>

        <form action="" class="mt-4" style="width: 70%; margin: 0 auto;">
            @csrf
            <div class="form-group">
                <label>What the news ?</label>
                <textarea class="form-control" id="" rows="3"></textarea>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad eaque itaque nobis officiis praesentium quam sapiente tenetur? Amet architecto eos fugit id libero, nisi nulla officia optio suscipit unde?</td>
                    <td>12/5/2018</td>
                    <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad eaque itaque nobis officiis praesentium quam sapiente tenetur? Amet architecto eos fugit id libero, nisi nulla officia optio suscipit unde?</td>
                    <td>12/5/2018</td>
                    <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
@stop
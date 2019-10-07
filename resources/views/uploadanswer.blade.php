@extends('layouts.master')

@section('title', 'Upload')

@section('more_link')
    <link rel="stylesheet" type="text/css" href="{{asset('css/upload_competition.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@stop

@section('content')
    <div>
        <div id="content">
            <h1 style="color: black; padding-left: 20px; margin-bottom: 50px;">Upload Competition File</h1>

            <div class="heading" style="float: left">
                <span id="identifier" class="color-black fw-bold"> Requirements </span>
            </div>
            <div style="color: #cb0000; width: 50%; margin-left: auto; padding: 20px">
                    Make sure you fill the form with the same data when you registered your team <br> and wait until the notification below SUBMIT button after you finish your registration.
            </div>
            <form action="/Answer" method="post" enctype="multipart/form-data">
                @csrf
                <div id="mid-content" class="dis-flex">
                    <div class="w-50">
                        <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                            <tbody>
                            <tr>
                                <td class="color-black lbl td-w-250 pad"> School</td>
                                <td><input type="text" name="school" id="school_txt" class="input-field" required></td>
                            </tr>
                            <tr>
                                <td class="color-black lbl pad"> Head of Delegation</td>
                                <td><input type="text" name="head" id="delegation_head_txt" class="input-field"
                                           required></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="w-50">
                        <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                            <tbody>
                            <tr>
                                <td class="color-black lbl td-w-250 pad"> Competition</td>
                                <td>
                                    <select id="competition_option" class="option-field" name="competition"
                                            style="">
                                        <option value="1"> EQ</option>
                                        <option value="2"> EDC</option>
                                        <option value="3"> BC</option>
                                        <option value="4"> ERP</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-black lbl"> Email</td>
                                <td><input type="email" name="email" id="email_txt" class="input-field" required></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="heading" style="margin-top: 10px;">
                    <span id="identifier" class="color-black fw-bold"> Files </span>
                </div>

                <div id="bottom-content" class="dis-flex">
                    <div class="w-50">
                        <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                            <tbody>
                            <tr>
                                <td class="color-black td-w-250 lbl"> Competition File</td>
                                <td><input class="upload-btn" type="file" name="competition_file"
                                           id="competition_upload_btn" required accept="application/zip"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <small>File must be .zip format and less then 200MB</small>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="w-50">
                        <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                            <tbody>
                            <tr>
                                <td class="color-black td-w-250 lbl pad-6"> Letter of Credentials</td>
                                <td><input class="upload-btn" type="file" name="credential_letter"
                                           id="letter_upload_btn" required accept="application/zip"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <small>File must be .zip format and less then 200MB</small>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="dis-flex flex-c flex-m">
                    <button id="competition_upload_btn" class=""> Submit</button>
                </div>
                <div class="text-center">
                    <small>Please wait until the upload complete, don't spam the button</small>
                </div>
            </form>
            @if(session()->has('error'))
                <div id="success_lbl" style="margin-top: 15px; text-align: center;" class="alert alert-danger"
                     role="alert">
                    {{session()->get('error')}}
                </div>
            @endif
            @if(session()->has('msg'))
                <div id="success_lbl" style="margin-top: 15px; text-align: center;" class="alert alert-success"
                     role="alert">
                    {{ session()->get('msg') }}! You can go to our <a href="Home" class="alert-link">Home</a> or <a
                            href="FAQ" class="alert-link">FAQ</a> to know more about us!
                </div>
            @endif
        </div>
    </div>
@stop
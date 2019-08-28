@extends('layouts.master')

@section('title', 'Registration')

@section('more_link')
    <link rel="stylesheet" type="text/css" href="{{asset('css/upload_competition.css')}}">
@stop

@section('content')
    <div>
        <div id="content">

            <h1 style="color: black; padding-left: 20px; margin-bottom: 50px;">Upload Competition File</h1>

            <div class="heading">
                <span id="identifier" class="color-black fw-bold"> Requirements </span>
            </div>
            <form action="">
                @csrf
            <div id="mid-content" class="dis-flex">
                <div class="w-50">
                    <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                        <tbody>
                        <tr>
                            <td class="color-black lbl td-w-250 pad"> School</td>
                            <td><input type="text" name="" id="school_txt" class="input-field"></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl pad"> Head of Delegation</td>
                            <td><input type="text" name="" id="delegation_head_txt" class="input-field"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-50">
                    <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                        <tbody>
                        <tr>
                            <td class="color-black lbl td-w-250"> Competition</td>
                            <td><input type="text" name="" id="competition_txt" class="input-field"></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl"> Email</td>
                            <td><input type="email" name="" id="email_txt" class="input-field"></td>
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
                            <td><input class="upload-btn" type="file" name="" id="competition_upload_btn"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-50">
                    <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                        <tbody>
                        <tr>
                            <td class="color-black td-w-250 lbl pad-6"> Letter of Credentials</td>
                            <td><input class="upload-btn" type="file" name="" id="letter_upload_btn"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="dis-flex flex-c flex-m">
                <button id="competition_upload_btn" class=""> Submit </button>
            </div>
        </form>
        </div>
    </div>
@stop
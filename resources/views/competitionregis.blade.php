@extends('layouts.master')

@section('title', 'Registration')

@section('more_link')
    <link rel="stylesheet" type="text/css" href="{{asset('css/competition_registration.css')}}">
@stop

@section('content')
    <div id="content" class="pt-5 pb-5 pl-5">
            <div id="identifier" class="heading">
                <span class="color-black fw-bold"> &nbsp Competition Registration </span>
            </div>

        <form action="">
            @csrf
            <div id="mid-content" class="dis-flex">
                <div class="w-50">
                    <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate;;">
                        <tbody>
                        <tr>
                            <td class="color-black lbl td-w-250"> School</td>
                            <td><input type="text" name="" id="school_txt" class="input-field"></td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="color-black lbl"> Accompanying <br> Teacher</td>
                            <td rowspan="2"><input type="text" name="" id="teacher_txt" class="input-field"></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="2" class="heading"><span class="color-black"> &nbsp Head of Delegation </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="color-black lbl "> Name</td>
                            <td><input type="text" name="" id="name_txt" class="input-field"></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl "> Email</td>
                            <td><input type="email" name="" id="email_txt" class="input-field"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="heading"><span class="color-black"> &nbsp Delegations </span></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl "> Delegate 2</td>
                            <td><input type="text" name="" id="delegate2_txt" class="input-field"></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl "> Delegate 3</td>
                            <td><input type="text" name="" id="delegate3_txt" class="input-field"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-50">
                    <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                        <tbody>
                        <tr>
                            <td class="color-black lbl td-w-250 pad"> Competition </td>
                            <td><input type="text" name="" id="competition_txt" class="input-field"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                        <span class="color-light-red"> Choose your competition. Please download the following
                            <a class="color-light-red fw-bold decor-u" href=""> Registration Form </a>
                        </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="color-black lbl pad"> Telephone</td>
                            <td><input type="text" name="" id="telephone_txt" class="input-field"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="heading"><span class="color-black"> &nbsp Administration </span></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl pad"> Proof of Payment</td>
                            <td><input class="upload-btn" type="file" name="" id="upload_payment_btn"></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl pad"> Registration Form</td>
                            <td><input class=" upload-btn" type="file" name="" id="upload_form_btn"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="dis-flex flex-c flex-m">
                <button id="register_btn" class=""> Submit</button>
            </div>
        </form>

    </div>
@stop
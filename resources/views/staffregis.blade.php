@extends('layouts.master')

@section('title', 'Registration')

@section('more_link')
    <link rel="stylesheet" type="text/css" href="{{asset('css/staff_registration.css')}}">
@stop

@section('content')
    <div>
    <div id="content" class="pt-5 pb-5 pl-3">
        <div class="heading">
            <span id="identifier" class="color-black fw-bold"> &nbsp; Staff Recruitment </span>
        </div>

        <div id="mid-content" class="dis-flex">
            <div class="w-50">
                <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                    <tbody>
                    <tr>
                        <td class="color-black lbl"> Name</td>
                        <td><input type="text" name="" id="name_txt" class="input-field"></td>
                    </tr>
                    <tr>
                        <td class="color-black lbl"> Student ID</td>
                        <td><input type="text" name="" id="id_txt" class="input-field"></td>
                    </tr>
                    <tr>
                        <td class="color-black lbl"> Program</td>
                        <td>
                            <select id="program_option" class="option-field">
                                <option value="acc"> Accounting</option>
                                <option value="eco"> Economics</option>
                                <option value="man"> Management</option>
                                <option value="isEco"> Islamic Economics</option>
                                <option value="isBus"> Islamic Business</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="color-black lbl p-r-20"> LINE / Phone</td>
                        <td><input type="text" name="" id="contact_txt" class="input-field"></td>
                    </tr>
                    <tr>
                        <td class="color-black lbl p-r-20"> 1st Choice</td>
                        <td>
                            <select id="1_choice_option" class="option-field">
                                <option value="event"> Event</option>
                                <option value="officer"> Liaison Officer</option>
                                <option value="eco_research"> Economic Research Paper</option>
                                <option value="business"> Business Case</option>
                                <option value="eco_quiz"> Economic Quiz</option>
                                <option value="eco_debate"> Economic Debate Competition</option>
                                <option value="log"> Logistics</option>
                                <option value="transport"> Transportation and Acommodation</option>
                                <option value="sponsor"> Sponsorship</option>
                                <option value="food"> Food, Beverage, and Bazaar</option>
                                <option value="creative"> Creative Design and Marketing</option>
                                <option value="communication"> Communication and General Affairs</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="color-black lbl p-r-20"> 2nd Choice</td>
                        <td>
                            <select id="2_choice_option" class="option-field">
                                <option value="event"> Event</option>
                                <option value="officer"> Liaison Officer</option>
                                <option value="eco_research"> Economic Research Paper</option>
                                <option value="business"> Business Case</option>
                                <option value="eco_quiz"> Economic Quiz</option>
                                <option value="eco_debate"> Economic Debate Competition</option>
                                <option value="log"> Logistics</option>
                                <option value="transport"> Transportation and Acommodation</option>
                                <option value="sponsor"> Sponsorship</option>
                                <option value="food"> Food, Beverage, and Bazaar</option>
                                <option value="creative"> Creative Design and Marketing</option>
                                <option value="communication"> Communication and General Affairs</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="color-black lbl pad p-r-20"> 3rd Choice</td>
                        <td>
                            <select id="3_choice_option" class="option-field">
                                <option value="event"> Event</option>
                                <option value="officer"> Liaison Officer</option>
                                <option value="eco_research"> Economic Research Paper</option>
                                <option value="business"> Business Case</option>
                                <option value="eco_quiz"> Economic Quiz</option>
                                <option value="eco_debate"> Economic Debate Competition</option>
                                <option value="log"> Logistics</option>
                                <option value="transport"> Transportation and Acommodation</option>
                                <option value="sponsor"> Sponsorship</option>
                                <option value="food"> Food, Beverage, and Bazaar</option>
                                <option value="creative"> Creative Design and Marketing</option>
                                <option value="communication"> Communication and General Affairs</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-50">
                <table id="timeTable" border="0" style="margin: 10px 0 10px 20px; ">
                    <tr>
                        <th> Shift</th>
                        <th> Mon</th>
                        <th> Tue</th>
                        <th> Wed</th>
                        <th> Thu</th>
                        <th> Fri</th>
                    </tr>
                    <tr>
                        <td> 1</td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td> 2</td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td> 3</td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td> 4</td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td> 5</td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <label class="container">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <p class="color-black">Note: Please select 5 time you're available in </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="dis-flex flex-c flex-m">
            <button id="register_staff_btn" class=""> Register</button>
        </div>
    </div>

    </div>
@stop
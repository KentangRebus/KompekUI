@extends('layouts.master')

@section('title', 'Registration')

@section('more_link')
    <link rel="stylesheet" type="text/css" href="{{asset('css/staff_registration.css')}}">
@stop

@section('more_script')
    @if(\Illuminate\Support\Facades\Session::get('status') == 0)
        <script>
            window.location = '/Home'
        </script>
    @endif
@stop

@section('content')
    <div>
        <div id="content" class="pt-5 pb-5 pl-3">
            <div class="heading">
                <span id="identifier" class="color-black fw-bold"> &nbsp; Staff Recruitment </span>
            </div>
            <form method="post" id="staffRegisForm">
                @csrf
                <div id="mid-content" class="dis-flex">
                    <div class="w-50">
                        <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                            <tbody>
                            <tr>
                                <td class="color-black lbl"> Name</td>
                                <td><input type="text" name="staff_name" id="name_txt" class="input-field" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-black lbl"> Student ID</td>
                                <td><input type="text" name="staff_student_id" id="id_txt" class="input-field" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-black lbl"> Program</td>
                                <td>
                                    <select id="program_option" class="option-field" name="program">
                                        <option value="Accounting"> Accounting</option>
                                        <option value="Economics"> Economics</option>
                                        <option value="Management"> Management</option>
                                        <option value="Islamic Economics"> Islamic Economics</option>
                                        <option value="Islamic Business"> Islamic Business</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-black lbl p-r-20"> Phone</td>
                                <td><input type="text" name="phone" id="contact_txt" class="input-field" required></td>
                            </tr>
                            <tr>
                                <td class="color-black lbl p-r-20"> LINE</td>
                                <td><input type="text" name="line" id="contact_txt" class="input-field" required></td>
                            </tr>
                            <tr>
                                <td class="color-black lbl p-r-20"> 1st Choice</td>
                                <td>
                                    <select id="1_choice_option" class="option-field" name="choiceOne">
                                        <option value="Event"> Event</option>
                                        <option value="Liaison Officer"> Liaison Officer</option>
                                        <option value="Economic Research Paper"> Economic Research Paper</option>
                                        <option value="Business Case"> Business Case</option>
                                        <option value="Economic Quiz"> Economic Quiz</option>
                                        <option value="Economic Debate Competition"> Economic Debate Competition
                                        </option>
                                        <option value="Logistics"> Logistics</option>
                                        <option value="Transportation and Acommodation"> Transportation and
                                            Acommodation
                                        </option>
                                        <option value="Sponsorship"> Sponsorship</option>
                                        <option value="Food, Beverage, and Bazaar"> Food, Beverage, and Bazaar</option>
                                        <option value="Creative Design and Marketing"> Creative Design and Marketing
                                        </option>
                                        <option value="Communication and General Affairs"> Communication and General
                                            Affairs
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-black lbl p-r-20"> 2nd Choice</td>
                                <td>
                                    <select id="2_choice_option" class="option-field" name="choiceTwo">
                                        <option value="Event"> Event</option>
                                        <option value="Liaison Officer"> Liaison Officer</option>
                                        <option value="Economic Research Paper"> Economic Research Paper</option>
                                        <option value="Business Case"> Business Case</option>
                                        <option value="Economic Quiz"> Economic Quiz</option>
                                        <option value="Economic Debate Competition"> Economic Debate Competition
                                        </option>
                                        <option value="Logistics"> Logistics</option>
                                        <option value="Transportation and Acommodation"> Transportation and
                                            Acommodation
                                        </option>
                                        <option value="Sponsorship"> Sponsorship</option>
                                        <option value="Food, Beverage, and Bazaar"> Food, Beverage, and Bazaar</option>
                                        <option value="Creative Design and Marketing"> Creative Design and Marketing
                                        </option>
                                        <option value="Communication and General Affairs"> Communication and General
                                            Affairs
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-black lbl pad p-r-20"> 3rd Choice</td>
                                <td>
                                    <select id="3_choice_option" class="option-field" name="choiceThree">
                                        <option value="Event"> Event</option>
                                        <option value="Liaison Officer"> Liaison Officer</option>
                                        <option value="Economic Research Paper"> Economic Research Paper</option>
                                        <option value="Business Case"> Business Case</option>
                                        <option value="Economic Quiz"> Economic Quiz</option>
                                        <option value="Economic Debate Competition"> Economic Debate Competition
                                        </option>
                                        <option value="Logistics"> Logistics</option>
                                        <option value="Transportation and Acommodation"> Transportation and
                                            Acommodation
                                        </option>
                                        <option value="Sponsorship"> Sponsorship</option>
                                        <option value="Food, Beverage, and Bazaar"> Food, Beverage, and Bazaar</option>
                                        <option value="Creative Design and Marketing"> Creative Design and Marketing
                                        </option>
                                        <option value="Communication and General Affairs"> Communication and General
                                            Affairs
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    <div id="error_lbl" style="display: none; width: 450px; right: 0; position: fixed;"
                                         class="alert alert-danger" role="alert">
                                        Cannot select same choice!
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                    </div>

                    <div class="w-50">
                        <h2 class="ml-4 pl-3 mb-4" style="border-left: 6px solid #b60000; color: black;">Interview
                            Schedule</h2>
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
                                        <input class="time" type="checkbox" name="time[]" id="" value="Mon 1">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Tue 1">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Wed 1">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Thu 1">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Fri 1">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 2</td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Mon 2">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Tue 2">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Wed 2">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Thu 2">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Fri 2">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 3</td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Mon 3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Tue 3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Wed 3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Thu 3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Fri 3">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 4</td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Mon 4">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Tue 4">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Wed 4">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Thu 4">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Fri 4">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 5</td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Mon 5">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Tue 5">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Wed 5">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Thu 5">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="container">
                                        <input class="time" type="checkbox" name="time[]" id="" value="Fri 5">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p class="color-black">Note: Please select 5 time you're available in </p>
                                    <label id="error" style="color: red" for=""></label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="dis-flex flex-c flex-m">
                    <button type="button" id="register_staff_btn" class=""> Register</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var check = 0;
        var checkboxes = document.getElementsByClassName("time");
        for (let i = 0; i < checkboxes.length; i++) {
            checkboxes[i].addEventListener("change", function () {
                if (this.checked) {
                    check++;
                    toggleEnable();
                } else {
                    check--;
                    toggleEnable();
                }
            })
        }

        function toggleEnable() {
            if (check >= 5) {
                for (let j = 0; j < checkboxes.length; j++) {
                    if (!checkboxes[j].checked) {
                        checkboxes[j].disabled = true;
                    }
                }
            } else {
                for (let j = 0; j < checkboxes.length; j++) {
                    checkboxes[j].disabled = false;
                }
            }
        }

        function checkChoice() {
            first = document.getElementById('1_choice_option').value;
            second = document.getElementById('2_choice_option').value;
            third = document.getElementById('3_choice_option').value;
            if (first == second || second == third || first == third) {
                document.getElementById('error_lbl').style.display = "block";
                setTimeout(function () {
                    $('#error_lbl').fadeOut('fast');
                }, 3000);
                return false;
            }
            else if (check != 5) {
                document.getElementById('error').innerHTML = "You must at least check 5 available times";
                return false;
            }
            else {
                document.getElementById('error').innerHTML = "";
                document.getElementById("staffRegisForm").action = "/Staff";
                document.getElementById("staffRegisForm").submit();
                return true;
            }
        }

    </script>
@stop
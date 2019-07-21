<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/competition_registration.css')}}">
    <title>KOMPEK FEB UI 2019</title>
</head>
<body>

<header class="txt-middle txt-center fs-18">
    <div class="w-10">
        <img src="{{asset('images/logo_white_small.png')}}" id="logo">
    </div>
    <div id="menu">
        <div class="w-10">
            <a class="color-white hov-cl0" href="http://127.0.0.1:8000/registration#"> HOMEPAGE </a>
        </div>
        <div class="w-10">
            <a class="color-white hov-cl0" href="http://127.0.0.1:8000/registration"> REGISTRATION </a>
        </div>
        <div class="w-10">
            <a class="color-white hov-cl0" href="http://127.0.0.1:8000/registration"> FAQ </a>
        </div>
    </div>
</header>

<div id="content">
    <div class="heading">
        <span class="fs-30 color-black"> &nbsp Competition Registration </span>
    </div>

    <div class="dis-flex">
        <div class="w-50">
            <table style="margin: 10px 0 10px 80px; border-spacing: 0 15px; border-collapse: separate">
                <tbody>
                <tr>
                    <td class="color-black fs-20 td-w-250"> School</td>
                    <td><input type="text" name="" id="school_txt" class="input-field"></td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Accompanying Teacher</td>
                    <td><input type="text" name="" id="teacher_txt" class="input-field"></td>
                </tr>
                <tr>
                    <td colspan="2" class="heading"><span class="fs-26 color-black"> &nbsp Head of Delegation </span>
                    </td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Name</td>
                    <td><input type="text" name="" id="name_txt" class="input-field"></td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Email</td>
                    <td><input type="email" name="" id="email_txt" class="input-field"></td>
                </tr>
                <tr>
                    <td colspan="2" class="heading"><span class="fs-26 color-black"> &nbsp Delegations </span></td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Delegate 2</td>
                    <td><input type="text" name="" id="delegate2_txt" class="input-field"></td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Delegate 3</td>
                    <td><input type="text" name="" id="delegate3_txt" class="input-field"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="w-50">
            <table style="margin: 10px 0 10px 80px; border-spacing: 0 15px; border-collapse: separate">
                <tbody>
                <tr>
                    <td class="color-black fs-20 td-w-250"> Competition</td>
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
                    <td class="color-black fs-20"> Telephone</td>
                    <td><input type="text" name="" id="telephone_txt" class="input-field"></td>
                </tr>
                <tr>
                    <td colspan="2" class="heading"><span class="fs-26 color-black"> &nbsp Administration </span></td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Proof of Payment</td>
                    <td><input class="upload-btn" type="file" name="" id="upload_payment_btn"></td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Registration Form</td>
                    <td><input class="upload-btn" type="file" name="" id="upload_form_btn"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="dis-flex flex-c flex-m">
        <button id="register_btn" class=""> Submit</button>
    </div>
</div>

</body>
</html>
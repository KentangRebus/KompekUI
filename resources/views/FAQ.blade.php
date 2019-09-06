@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <img src="{{asset('images/element1.png')}}" alt="" style="width: 100%; opacity: 0.1; position: absolute;">
    <div class="text-center p-3 pl-5 pr-5">
        <h1 class="text-dr mt-3">Frequently Asked Questions</h1>

        <div class="text-left p-5 mt-4">
            <div class="mb-4">
                <ul class="mb-4">
                    <li class="question-tag mb-2 text-dr">1. Does the product have to be related to KOMPeK 22’s theme? (BC)</li>
                    <li class="answer-tag pl-3">The product doesn’t have to be related to our theme. Any kind of business can be applied.</li>
                </ul>
                <ul class="mb-4">
                    <li class="question-tag mb-2 text-dr">2. What is the theme for ERP?</li>
                    <li class="answer-tag pl-3">The main theme is “Pemanfaatan Sektor Unggulan Sebagai Sarana untuk Mewujudkan Ketahanan Ekonomi Nasional” ( You can read more about the subtheme in our guidance book )</li>
                </ul>
                <ul class="mb-4">
                    <li class="question-tag mb-2 text-dr">3. Does the answer for each regional selection questions in Economic Quiz have minimum/maximum pages?</li>
                    <li class="answer-tag pl-3">Each questions should be answered in 1 page only (attachment excluded). Any longer than that will deduct your score. Please make sure the answers and attachment are made in separate files and uploaded to the website in format .rar.</li>
                </ul>
            </div>
            <hr>
            <div class="mt-5">
                <h3 class="text-dr mb-3">FAQ Registration</h3>
                <ul class="pt-3 mb-4">
                    <li class="question-tag mb-2 text-dr">Q : Bagaimana pendaftar dapat mengakses guidance book KOMPek 22?</li>
                    <li class="answer-tag">A : Guidance book KOMPek 22 dapat di download di link yang tersedia di Announcement di Website www.kompek-febui.com</li>
                </ul>
                <ul class="pt-3 mb-4">
                    <li class="question-tag mb-2 text-dr">Q : Bagaimana pendaftar dapat mengakses Registration Form KOMPeK 22?</li>
                    <li class="answer-tag">A : Registration Form dapat di-download di Link yang tersedia di Registration Section Official Website KOMPeK 22</li>
                </ul>
                <ul class="pt-3 mb-4">
                    <li class="question-tag mb-2 text-dr">Q : Proof of Payment dikirim dalam bentuk apa kemana?</li>
                    <li class="answer-tag">A : Proof of Payment diupload bersamaan dengan data diri saat registrasi awal dalam format pdf (.pdf).</li>
                </ul>
                <ul class="pt-3 mb-4">
                    <li class="question-tag text-dr">Apabila pembayaran dilakukan bersama-sama untuk satu sekolah yang mengirimkan jumlah tim lebih dari satu, maka setiap tim juga harus mengirimkan bukti pembayaran yang sama tersebut.</li>
                </ul>
            </div>
        </div>

    </div>
@stop
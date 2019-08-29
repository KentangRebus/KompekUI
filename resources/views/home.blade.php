@extends('layouts.master')

@section('title', 'Home')

@section('more_link')

@stop

@section('more_script')
    <script src="{{asset('js/slideShow.js')}}"></script>
@stop


@section('content')
    <div class="mb-5">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="{{asset('images/slide/1.JPG')}}" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset('images/slide/3.JPG')}}" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset('images/slide/4.JPG')}}" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset('images/slide/5.JPG')}}" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset('images/slide/7.JPG')}}" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset('images/slide/8.JPG')}}" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="{{asset('images/slide/9.JPG')}}" style="width:100%">
            </div>
            <div class="coverColor"></div>
        </div>
        <div class="text">
            <img id="mainLogo" src="{{asset('images/K22_logo_wh.png')}}" alt="">
            <h2 class="text-wh" style="margin-top: 10px">AMPLIFY:Optimizing the Leading Sectors</h2>
            <h2 class="text-wh">to Amplify National Economic Resilience</h2>
            <p style="margin-top: 30px">
                KOMPeK adalah kompetisi ekonomi berskala nasional yang diadakan oleh mahasiswa Fakultas Ekonomi dan Bisnis Universitas Indonesia untuk siswa-siswi SMA/sederajat dari seluruh Indonesia. Sejalan dengan visinya memberikan kontribusi nyata untuk perkembangan pendidikan yang berkualitas di Indonesia, KOMPeK merupakan sebuah bentuk pengabdian entitas Fakultas Ekonomi dan Bisnis Universitas Indonesia pada dunia pendidikan Indonesia.
            </p>
        </div>
        <div class="d-flex flex-row text-dr p-5 justify-content-md-around mb-5">
            <div class="bdr-red" id="announcement-container">
                <h2 style="border-bottom: 2px solid; font-weight: bold" class="mb-4">Announcement</h2>
                <img src="{{asset('images/ring1.png')}}" alt="" class="rings">
                @for($i = 0; $i < 3; $i++)
                    <div class="ann-item mb-4">
                        <p>
                            {{ $data[$i]->announcement }}
                        </p>
                        <hr>
                    </div>
                @endfor

            </div>
            <div class="bdr-red" id="testimonial-container">

                <div class="testi-item testimonialSlides fade">
                    <img src="{{asset('images/testimonials/Bu Marie Elka.png')}}" alt="" class="mb-2">
                    <p align="left" class="mt-4">
                        “Memberikan pengalaman pertama untuksiswa SMA dalam ekonomidan bisnis serta meningkatkan pengetahuan dan minat dalam mempelajari ekonomi.”
                        <br>
                        <div class="fs-13 font-weight-bold text-lg-left mt-3">
                            Marie Elka Pangestu
                            <br>
                            Former Minister of Tourism and Creative Industry (2011-2014)
                        </div>
                    </p>
                </div>

                <div class="testi-item testimonialSlides fade">
                    <img src="{{asset('images/testimonials/Pak Gita.png')}}" alt="" class="mb-2">
                    <p align="left" class="mt-4">
                        “Memberikan pengalaman pertama untuksiswa SMA dalam ekonomidan bisnis serta meningkatkan pengetahuan dan minat dalam mempelajari ekonomi.”
                        <br>
                    <div class="fs-13 font-weight-bold text-lg-left mt-3">
                        Gita Irawan Wirjawan
                        <br>
                        Former Minister of Trade (2011-2014)
                    </div>
                    </p>
                </div>

                <div class="testi-item testimonialSlides fade">
                    <img src="{{asset('images/testimonials/Pak Rhenald.png')}}" alt="" class="mb-2">
                    <p align="left" class="mt-4">
                        "KOMPeK merupakan acara yang komprehensif mengingat cakupannya yang luas yaitu se-Indonesia, serta sebagai sarana pengetahuan praktis dalam aplikasi ilmu ekonomi untuk murid SMA sederajat"
                        <br>
                    <div class="fs-13 font-weight-bold text-lg-left mt-3">
                        Prof. Rhenald Khasali
                        <br>
                        Founder of Rumah Perubahan
                    </div>
                    </p>
                </div>
            </div>
            <div id="timeline-container">
                <h2>TIMELINE</h2>

                <img src="{{asset('images/timeline.png')}}" alt="" style="width: 450px">
                
            </div>
        </div>
        <div class="pl-5 pr-5 pt-5 pb-5">
            <hr>
        </div>
        <div class="mt-5 flex-row flex-lg-wrap comp-container" style="background: url("{{ asset('images/patternHome.png') }}"); ">
            <div class="text-dr comp-title">
                <h1 class="comp-hvr">EQ</h1>
                <div class="bdr-red comp-item">
                    <img src="{{asset('images/EQ.jpg')}}" alt="" class="mb-4">
                    <p style="color: black">
                        This is the most favourite competition every year in KOMPeK. This competition is designed to test high school student's knowledge and understanding about economy comprehensively with various kinds of model in every round. One of them is amazing race!
                    </p>
                </div>
            </div>
            <div class="text-dr comp-title">
                <h1 class="comp-hvr">EDC</h1>
                <div class="bdr-red comp-item">
                    <img src="{{asset('images/EDC.jpg')}}" alt="" class="mb-4">
                    <p style="color: black">
                        EDC is an english debate competition with the model of the asian parliamentary system where the participants are expected to understand about the hottest issues in economy and showing off their thinking and talking skills.
                    </p>
                </div>
            </div>
            <div class="text-dr comp-title">
                <h1 class="comp-hvr">BC</h1>
                <div class="bdr-red comp-item">
                    <img src="{{asset('images/BC.jpg')}}" alt="" class="mb-4">
                    <p style="color: black">
                        BC is a competition to see high school student's entrepreneurship skills. We challenge the participants to innovate and develop products.
                    </p>
                </div>
            </div>
            <div class="text-dr comp-title">
                <h1 class="comp-hvr">ERP</h1>
                <div class="bdr-red comp-item">
                    <img src="{{asset('images/ERP.jpg')}}" alt="" class="mb-4">
                    <p style="color: black">
                        This one is a competition to build high school student's interest in research and writing papers, especially in economy. We are looking for papers that critical and systematic.
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop

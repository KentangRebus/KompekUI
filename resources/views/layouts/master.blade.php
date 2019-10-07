<!DOCTYPE html>
<html lang="en">
<head>
    <title>KOMPeK FEB UI 22 | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="description" content="Welcome to Official Website The 22nd KOMPek FEB UI. Get to Know us More Here!">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="icon" href="{{asset('images/K22_logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/brands.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/fontawesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/solid.min.css')}}">
    @yield('more_link')
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
    });
</script>
<body>
    <div class="se-pre-con"></div>
    <header class="d-flex flex-row responsive-f-col res-center">
        <img src="{{asset('images/nav_logo.png')}}" alt="" onclick="redirectTo('/Home')">
        <nav id="navbar">
            <ul class="d-flex flex-row responsive-f-col">
                <li onclick="redirectTo('/Home')"><a href="/Home">Home</a></li>
                <li class="dropdown">
                    Registration
                    <div class="dropdown-content">
                        <a href="/CompetitionRegistration">Competition Registration</a>
                        @if(\Illuminate\Support\Facades\Session::get('status') == 1)
                        <a href="/StaffRegistrationForm">Staff Registration</a>
                        @endif
                    </div>
                </li>
                <li onclick="redirectTo('/UploadAnswer')"><a href="/UploadAnswer">Upload</a></li>
                <li onclick="redirectTo('/FAQ')"><a href="/FAQ">FAQ</a></li>
            </ul>
        </nav>
        <a href="javascript:void(0)" class="m-l-auto p-3 burger" onclick="toggleNav()">
            <i class="fa fa-bars fa-3x"></i>
        </a>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="">
        <div class="d-flex flex-row justify-content-around pb-5 responsive-f-col">
            <div class="mt-3">
                <h5>KOMPeK 22nd: Amplify</h5>
                <div class="d-flex flex-row mt-5 res-center">
                    <a style="color: white !important;" href="https://www.instagram.com/kompekfebui/?hl=en" target="_blank" class="soc-item"><i class="fab fa-instagram"></i></a>
                    <a style="color: white !important;" href="https://www.facebook.com/kompekfebui/" target="_blank" class="soc-item"><i class="fab fa-facebook-f"></i></a>
                    <a style="color: white !important;" href="https://twitter.com/kompekfebui?lang=en" target="_blank" class="soc-item"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="res-center mt-3">
                <h5 class="mb-4">Contact Info</h5>
                <div class="d-flex flex-col mb-3 res-center">
                    <div class="d-flex flex-row res-center">
                        <i class="fas fa-user"></i>
                        <div class="pl-2">Khadijah Husnudini</div>
                    </div>
                    <div class="d-flex flex-row res-center">
                        <i class="far fa-envelope"></i>
                        <div class="pl-2">khadijahusnudini@gmail.com</div>
                    </div>
                    <div class="d-flex flex-row res-center">
                        <i class="fas fa-phone"></i>
                        <div class="pl-2">+62818698891</div>
                    </div>
                </div>
                <hr>
                <div class="d-flex flex-col">
                    <div class="d-flex flex-row res-center">
                        <i class="fas fa-user"></i>
                        <div class="pl-2">Mervin Goklas Hamonangan</div>
                    </div>
                    <div class="d-flex flex-row res-center">
                        <i class="far fa-envelope"></i>
                        <div class="pl-2">mervin.goklas@gmail.com</div>
                    </div>
                    <div class="d-flex flex-row res-center">
                        <i class="fas fa-phone"></i>
                        <div class="pl-2">+6281291117876</div>
                    </div>
                </div>
            </div>
            <div>
                <h5 class="mb-4 mt-3">Quick Navigation</h5>
                <div class="d-flex flex-row res-center">
                    <i class="fas fa-file-signature"></i>
                    <div class="pl-2">
                        <a href="/CompetitionRegistration" style="color: white !important;">Registration</a>
                    </div>
                </div>
                <div class="d-flex flex-row res-center">
                    <i class="fas fa-question"></i>
                    <div class="pl-3">
                        <a href="/FAQ" style="color: white !important;">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: maroon; padding: 10px; font-size: 12px">
            © 2019 KOMPek 22nd FEB UI | In Partnership with: LASF
        </div>
    </footer>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/fontawesome/all.min.js')}}"></script>
<script src="{{asset('js/fontawesome/brands.min.js')}}"></script>
<script src="{{asset('js/fontawesome/fontawesome.min.js')}}"></script>
<script src="{{asset('js/fontawesome/solid.min.js')}}"></script>
    <script>
        function toggleNav(){
            var x = document.getElementById('navbar');

            if (x.className === ""){
                x.className = 'show';
            }
            else {
                x.className = '';
            }
            
        }
    </script>
@yield('more_script')
</body>
</html>
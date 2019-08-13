<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to Official Website The 22nd KOMPek FEB UI. Get to Know us More Here!">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="icon" href="{{asset('images/K22_logo.png')}}">
    <script src="https://kit.fontawesome.com/51221b6931.js"></script>
</head>
<body>
    <header class="d-flex flex-row">
        <img src="{{asset('images/nav_logo.png')}}" alt="">
        <nav>
            <ul class="d-flex flex-row">
                <li><a href="/Home">HomePage</a></li>
                <li>Registration</li>
                <li><a href="/FAQ">FAQ</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="d-flex flex-row justify-content-around pb-5">
            <div class="">
                <h5>KOMPeK 22nd:Amplify</h5>
                <div class="d-flex flex-row mt-5">
                    <a style="color: white !important;" href="https://www.instagram.com/kompekfebui/?hl=en" class="soc-item"><i class="fab fa-instagram"></i></a>
                    <a style="color: white !important;" href="https://www.facebook.com/kompekfebui/" class="soc-item"><i class="fab fa-facebook-f"></i></a>
                    <a style="color: white !important;" href="https://twitter.com/kompekfebui?lang=en" class="soc-item"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div>
                <h5 class="mb-4">Contact Info</h5>
                <div class="d-flex flex-col mb-3">
                    <div class="d-flex flex-row ">
                        <i class="fas fa-user"></i>
                        <div class="pl-2">Khadijah Husnudini</div>
                    </div>
                    <div class="d-flex flex-row">
                        <i class="far fa-envelope"></i>
                        <div class="pl-2">khadijahusnudini@gmail.com</div>
                    </div>
                    <div class="d-flex flex-row">
                        <i class="fas fa-phone"></i>
                        <div class="pl-2">+62818698891</div>
                    </div>
                </div>
                <hr>
                <div class="d-flex flex-col">
                    <div class="d-flex flex-row ">
                        <i class="fas fa-user"></i>
                        <div class="pl-2">Mervin Goklas Hamonangan</div>
                    </div>
                    <div class="d-flex flex-row">
                        <i class="far fa-envelope"></i>
                        <div class="pl-2">mervin.goklas@gmail.com</div>
                    </div>
                    <div class="d-flex flex-row">
                        <i class="fas fa-phone"></i>
                        <div class="pl-2">+6281291117876</div>
                    </div>
                </div>
            </div>
            <div>
                <h5 class="mb-4">Quick Navigation</h5>
                <div class="d-flex flex-row ">
                    <i class="fas fa-file-signature"></i>
                    <div class="pl-2">
                        <a href="" style="color: white !important;">Registration</a>
                    </div>
                </div>
                <div class="d-flex flex-row ">
                    <i class="fas fa-question"></i>
                    <div class="pl-3">
                        <a href="" style="color: white !important;">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: maroon; padding: 10px; font-size: 12px">
            © 2019 KOMPek 22nd FEB UI | In Partnership with: vendor
        </div>
    </footer>
</body>
</html>
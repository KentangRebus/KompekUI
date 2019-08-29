<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('images/K22_logo.png')}}">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/mainadmin.css')}}">
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{url('/LoginAdminKompek')}}" method="post">
                @csrf
					<span class="login100-form-title p-b-50" style="margin-bottom: 50px">
						Welcome Admin
					</span>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100" data-placeholder="Username"></span>
                </div>

                <div class="wrap-input100 validate-input">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>
                @if(\Illuminate\Support\Facades\Session::has('msg'))
                    <div style="text-align: center; color: red">{{\Illuminate\Support\Facades\Session::get('msg')}}</div>
                @endif
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
<script src="{{asset('js/mainadmin.js')}}"></script>
</html>
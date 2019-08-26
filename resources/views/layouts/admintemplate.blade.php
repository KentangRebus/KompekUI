<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
    <title>Admin</title>
</head>
<style>
    .line-1{
        position: relative;
        top: 20%;
        width: 24em;
        margin: 0 auto;
        border-right: 2px solid rgba(0, 0, 0, 0.75);
        font-size: 180%;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        transform: translateY(-50%);
    }

    .anim-typewriter{
        animation: typewriter 4s steps(44) 1s 1 normal both,
        blinkTextCursor 500ms steps(44) infinite normal;
        animation-iteration-count: infinite ;
    }
    @keyframes typewriter{
        from{width: 0;}
        to{width: 24em;}
    }
    @keyframes blinkTextCursor{
        from{border-right-color: rgba(255,255,255,.75);}
        to{border-right-color: transparent;}
    }
</style>
<body class="app sidebar-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h2 class="line-1 anim-typewriter">Welcome Admin Kompek 2019</h2>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="nav-icon cui-speedometer"></i> Answer
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="nav-icon cui-user"></i> Participant
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="nav-icon cui-layers "></i> Case
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="nav-icon cui-share "></i> Announcement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="nav-icon cui-user "></i> Staff
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="nav-icon cui-account-logout"></i> Log Out
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">
            @yield('adminContent')
        </main>
    </div>



<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>
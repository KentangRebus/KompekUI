<!DOCTYPE html>
<html lang="en">
<head>
    <title>KOMPEK FEB UI 2019</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to Official Website The 22nd KOMPek FEB UI. Get to Know us More Here!">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="icon" href="{{asset('images/K22_logo.png')}}">
</head>
<body>
<div class="bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url({{asset('images/bg01.jpg')}});">
    <div class="wsize1">
        <p class="txt-center">
            <img src="{{asset('images/K22_logo_wh.png')}}" style="width: 350px">
        </p>

        <h3 class="l1-txt1 txt-center p-b-22">
            Coming Soon
        </h3>

        <div class="flex-w flex-sa-m cd100 bor1 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
            <div class="flex-col-c-m wsize2 m-b-20">
                <span class="l1-txt2 p-b-4 days">00</span>
                <span class="m2-txt2">Days</span>
            </div>

            <span class="l1-txt2 p-b-22">:</span>

            <div class="flex-col-c-m wsize2 m-b-20">
                <span class="l1-txt2 p-b-4 hours">00</span>
                <span class="m2-txt2">Hours</span>
            </div>

            <span class="l1-txt2 p-b-22 respon2">:</span>

            <div class="flex-col-c-m wsize2 m-b-20">
                <span class="l1-txt2 p-b-4 minutes">00</span>
                <span class="m2-txt2">Minutes</span>
            </div>

            <span class="l1-txt2 p-b-22">:</span>

            <div class="flex-col-c-m wsize2 m-b-20">
                <span class="l1-txt2 p-b-4 seconds">00</span>
                <span class="m2-txt2">Seconds</span>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('vendor/countdowntime/moment.min.js')}}"></script>
<script src="{{asset('vendor/countdowntime/moment-timezone.min.js')}}"></script>
<script src="{{asset('vendor/countdowntime/moment-timezone-with-data.min.js')}}"></script>
<script>

    let daysSpan = document.getElementsByClassName('days');
    let hoursSpan = document.getElementsByClassName('hours');
    let minutesSpan = document.getElementsByClassName('minutes');
    let secondsSpan = document.getElementsByClassName('seconds');

    let countDownDate = new Date('September 5 2019 12:00');

    function updateClock() {

        // Get today's date and time
        let now = new Date().getTime();

        // Find the distance between now and the count down date
        let distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result
        daysSpan[0].innerHTML = ('00'+days).slice(-2);
        hoursSpan[0].innerHTML = ('00'+hours).slice(-2);
        minutesSpan[0].innerHTML = ('00'+minutes).slice(-2);
        secondsSpan[0].innerHTML = ('00'+seconds).slice(-2);

        // If the count down is over
        if (distance <= 0) {
            clearInterval(timeinterval);
        }

    }

    // updateClock();
    // var timeinterval = setInterval(updateClock, 500);

</script>
</body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pengumuman Kelulusan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
      	<link rel="icon" href="{{asset('images/favicon.png')}}" sizes="192x192">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/comingsoon.css')}}">
    </head>
    <body>
    <div id="particles-js"></div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title" >
                    Countdown Pengumuman Kelulusan SMK Harapan Kartasura
                </div>
                <div class="title m-b-md" id="clock"></div>
                                <ul class="links">
                                            <li><a href="https://web.facebook.com/smkharapankartasura">Facebook</a></li>
                                                                <li><a href="https://twitter.com/">Twitter</a></li>
                                                                <li><a href="https://www.instagram.com/smkharapankartasura">Instagram</a></li>
                                                                <li><a href="https://github.com/wesjira">Github</a></li>
                                                                <li><a href="mailto:admin@smkharapankts.sch.id">Email</a></li>
                                    </ul>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="{{asset('assets/js/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    {{-- <script src="{{asset('js/js.countdown.js')}}"></script> --}}
    <script src="{{asset('js/particles.min.js')}}"></script>
    <script src="{{asset('js/comingsoon.js')}}"></script>
    
    <script>
    var $clock = $('#clock');
    $('#clock').countdown('2021-06-03 16:00:00', function(event) {
        var $this = $(this).html(event.strftime(''
            + '<span id="days">%D<div>Hari</div></span>'
            + '<span id="hours">%H<div>Jam</div></span>'
            + '<span id="minutes">%M<div>Menit</div></span>'
            + '<span id="seconds">%S<div>Detik</div></span>'));
    }).on('finish.countdown', function({
        
    });
    // var target_date=new cdtime("clock", "June 03, 2021 16:00:00");
    // target_date.displaycountdown("days", displayCountDown);
    </script>
</html>

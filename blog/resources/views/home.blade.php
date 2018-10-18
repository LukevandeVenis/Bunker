<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .top-left {
            position: absolute;
            left: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        /* Header */

        .header, .header a {
            background-color: #FC6600;
            color: #FFFFFF;
            height: 70px;
            line-height: 35px;
        }

        .footer, .footer a {
            background-color: #CFCFCF;
            color: #FFFFFF;
            height: 70px;
            line-height: 35px;
        }

        .menu a {
            font-size: 22px;
        }

        .footer {
            position: fixed;
            bottom: 0px;
            width: 100%;
        }

        .footer .left-footer {
            position: absolute;
            left: 0px;
        }

        .footer .left-footer img {
            height: 50px;
            padding-left: 30px;
            padding-top: 10px;
        }

        .footer .right-footer {
            position: absolute;
            right: 30px;
            color: #000000;
            font-weight: bold;
            padding-top: 20px;
        }
        .content .content-image{
            position: absolute;
            width: 35%;
            left: 70px;
            top: 140px;
        }

        .content .content-text{
            position: absolute;
            padding-top: 50px;
            width: 45%;
            right: 170px;
            text-align: left;
            font-size: 18px;
        }
        .voorbeeld-box {
            margin-left: 70px;
            top: 560px;
            position: absolute;
            border-radius: 8px;
            height: 400px;
            width: 330px;
            background-color: rgba(207, 207, 207, 0.3);
        }
        .voorbeeld-box-image img{
            margin-top: 10px;
            height: 151px;
            border-bottom: solid;
            border-color: #fff;
            border-width: 5px;
            border-radius: 5px;
        }
        .voorbeeld-box-text h2, .voorbeeld-box-text p {
            text-align: left;
            margin-left: 10px;
            margin-right: 10px;
        }

    </style>
</head>
<body>
<div class="header">
    @if (Route::has('login'))
        <div class="top-left menu font-weight-bold links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('progress')}}">Vooruitgang</a>
        </div>
        <div class="top-right links">
            @auth
                <a href="{{ route('logout') }}">Uitloggen</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</div>
<div class="content">
    <img src="{{ url("/images/projectbunkers.jpg") }}" class="content-image">
    <div class="content-text">
        <h1>Project Bunker</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
            ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
            Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
            vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
    </div>
    <div class="voorbeeld-box">
        <div class="voorbeeld-box-image">
            <img src="{{ url("/images/vooruitgang1.jpg")}}">
        </div>
        <div class="voorbeeld-box-text">
            <h2><b>Project 1</b></h2>
            <p>
                Lorem ipsum dolor sit amet,
                consectetur adipiscing elit,
                sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua.
                Ut enim ad minim veniam.
            </p>

        </div>
    </div>
</div>
<div class="footer">
    <div class="left-footer">
        <img src="{{url("/images/logo_deltion.png")}}">
    </div>
    <div class="right-footer">
        Kasper, Luke, Jochem, Bram & Jorrit
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
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
    .container{
      margin-top: 25px;
    }

    </style>
</head>
<body>
  <div class="header">
    @if (Route::has('login'))
        <div class="top-left menu font-weight-bold links">
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('progress') }}">Vooruitgang</a>
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
            <!--Jorrit maak css voor content-->
            @yield("content")
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

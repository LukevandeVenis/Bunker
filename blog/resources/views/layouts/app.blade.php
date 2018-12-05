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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<title>Bunker 2 Blog</title>

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

    .container{
      align-items: center;
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

    .links > a {
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
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

    .content .content-image {
        position: absolute;
        width: 35%;
        margin-left: 0;
    }

    .content .content-text {
        position: absolute;
        width: 40%;
        text-align: left;
        font-size: 18px;
        left: 50%;
    }

    .voorbeeld-box {
        /*margin-left: 70px;*/
        position: relative;
        border-radius: 8px;
        height: 300px;
        width: 330px;
        top: 300px;
        background-color: rgba(207, 207, 207, 0.3);
    }

    .voorbeeld-box-image img {
        margin-left: 15px;
        align-items: center;
        margin-top: 10px;
        height: 151px;
        border-radius: 10%;
    }

    .voorbeeld-box-text h2, .voorbeeld-box-text p {
        text-align: left;
        margin-left: 10px;
        margin-right: 10px;
    }
<<<<<<< HEAD
    .box {
  	  margin-left: 70px;
      position: absolute;
      border-radius: 8px;
      height: 400px;
      width: 330px;
      background-color: rgba(207, 207, 207, 0.3);
    }
    .box-image img{
      margin-top: 10px;
      height: 151px;
      border-bottom: solid;
      border-color: #fff;
      border-width: 5px;
      border-radius: 5px;
    }
    .box-text h2, .box-text p {
      text-align: left;
      margin-left: 10px;
      margin-right: 10px;
    }
    .container{
      margin-top: 25px;
=======

    .container {
        padding: 0;
        margin-top: 10px;
>>>>>>> 600b38862f98401170f79ee6d92971fb04e404b5
    }

</style>
</head>
<body>
<div class="header">
    @if (Route::has('login'))
        <div class="top-left menu font-weight-bold links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('posts.index') }}">Vooruitgang</a>
            <a href="{{ route('user') }}">Gebruikers</a>
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
<div class="container">
    <div class="content">
        @yield("content")
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

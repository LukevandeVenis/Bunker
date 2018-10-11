<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
<<<<<<< HEAD
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
=======
>>>>>>> 1510ed1d499a21db3894cee207b6aa0a5fa2fa88
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======
        return view('welcome ');
>>>>>>> 1510ed1d499a21db3894cee207b6aa0a5fa2fa88
    }
}

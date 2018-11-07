<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function ShowUserlist(){


        $users = User::all();

        return view('user', compact('users'));
    }
}

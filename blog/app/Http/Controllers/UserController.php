<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function ShowUserlist(){


        $users = User::all();

        return view('user', compact('users'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user){
      $view = view("users.edit");
      $view->user = $user;
      return $view;
    }
     public function store(Request $request, $user_id=null){
      $user = User::findOrNew($user_id);
      $user->name = $request->get('name');
      $user->email = $request->get('email');
      $user->save();
      return redirect()->to('/users')->with('Succes', 'Het item is succesvol opgeslagen!');
    }

}

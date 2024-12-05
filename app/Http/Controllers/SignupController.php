<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function getSignup(){
        return view('home.signup');
    }

    public function postSignup(Request $request){
       $validated = $request->validate(User::rules());
       
       $user = User::create([
        'name'=> $request->name,
        'last_name'=> $request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
       ]);
       
      Auth::Login($user);

      return redirect('/');

    }
}

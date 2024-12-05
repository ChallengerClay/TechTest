<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('home.login');
    }

    public function postLogin(Request $request){
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|max:10|'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credential)){
            return redirect('/')->with('success','Bienvenido de vuelta '.$request->email.'!');
        }else{
            redirect('login')->withErrors('msg','Ha ocurrido un error iniciando su sesión,intente después')->withInput();
        }



    }

    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
}

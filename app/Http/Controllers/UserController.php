<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Register(Request $request){
        $u = new User();
        $u -> name = $request -> request('name');
        $u -> email = $request -> request('email');
        $u -> password = Hash::make($request -> request('password'));
        $u -> save();

        return redirect("/registrar")-> with("created",true);
    }

    public function Login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
            return redirect("/");
        return redirect("/login")->with("failed",true);
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/login")->with("logout",true);
    }
}
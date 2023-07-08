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
        $u -> name = $request -> post('name');
        $u -> email = $request -> post('email');
        $u -> password = Hash::make($request -> post('password'));
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

   /*
    public function Home(Request $request){
        if(Auth::check()){
            $posts = Auth::user() -> Publica() -> get();
            return view("inicio",["posts" => $posts]);
        }
        return view("inicio");

    }

    public function VerPosts(Request $request){
      $posts = Auth::user() -> posts() -> get();
      return view("privada",["posts" => $posts]);
  }
  */



}
<?php

namespace App\Http\Controllers\Autenticacion;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroUsuarioController extends Controller
{
    public function store(Request $request){
        $u = new User();
        $u -> name = $request -> name;
        $u -> email = $request -> email;
        $u -> password = Hash::make($request -> password);
        $u -> save();

        return redirect("/registrar")-> with("Usuario creado...",true);
    }



}

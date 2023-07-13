<?php

namespace App\Http\Controllers\Autenticacion;

use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginUsuarioController extends Controller
{
    public function store(Request $request){
       $credentials = $request->validate([
        'email' => ['required', 'string', 'email'],
        'password'=> ['required', 'string'],
       ]);
       
       $request->session()->regenerate();
       
       return to_route('logueado')
           ->with('status', 'LogOuttt..!!!');

    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')
            ->with('status', 'LogOuttt..!!!');
    }


}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Autenticacion;
use App\Http\Middleware\PermisoDeEscritura;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('index');
});

Route::get("/post",[AutenticacionController::class,"VerPosts"])->middleware(Autenticacion::class);

Route::get("/privada2", function (){
    return view("privada2");
})->middleware(Autenticacion::class);


Route::get("/registrar", function (){
    return view("registrar");
});

Route::get("/login", function (){
    return view("login");
});




Route::post("/registrar",[AutenticacionController::class,"Registrar"]);
Route::post("/login",[AutenticacionController::class,"Login"]);
Route::get("/logout",[AutenticacionController::class,"Logout"])-> middleware(Autenticacion::class);
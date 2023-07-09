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


Route::get("/login", function (){
    return view("/user/login");
});
Route::get("/registrar", function (){
    return view("/user/registrar");
});
Route::get("/crearPost", function (){
    return view("/post/crear");
})->middleware(Autenticacion::class);
Route::get("/editarPost", function (){
    return view("/post/editar");
})->middleware(Autenticacion::class);
Route::get("/listarPost", function (){
    return view("/post/listar");
})->middleware(Autenticacion::class);


Route::get("/logueado",[PostController::class,"ListarPorAutor"]);
Route::get("/",[PostController::class,"Listar"]);

Route::post("/listar",[PostController::class,"Listar"]);
Route::post("/editar",[PostController::class,"edit"]);
Route::post("/registrar",[AutenticacionController::class,"Registrar"]);
Route::post("/login",[AutenticacionController::class,"Login"]);

Route::get("/logout",[AutenticacionController::class,"Logout"])
-> middleware(Autenticacion::class);

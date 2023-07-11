<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Autenticacion;


Route::get("/",[PostController::class,"Listar"]);
Route::post("/login",[AutenticacionController::class,"Login"]);
Route::post("/registrar",[AutenticacionController::class,"Registrar"]);

Route::get("/logueado",[PostController::class,"ListarPorAutor"]);
Route::get("/post.crear",[PostController::class,"Crear"])->name('post.crear');
Route::post("/post.editar",[PostController::class,"Editar"])->name('post.editar');
Route::get("/post.editar/{post}",[PostController::class,"show"]);


Route::get("/logout",[AutenticacionController::class,"Logout"])
-> middleware(Autenticacion::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Autenticacion;


Route::get("/",[PostController::class,"index"]);
Route::post("/login",[AutenticacionController::class,"Login"]);
Route::post("/registrar",[AutenticacionController::class,"Registrar"]);

Route::get("/logueado",[PostController::class,"ListarPorAutor"])->name('user.logueado');;
Route::get("/post.crear",[PostController::class,"Crear"])->name('post.crear');
Route::post("/post",[PostController::class,"store"])->name('post.store');
Route::get("/post/{post}",[PostController::class,"show"]);
Route::get("/post/{post}/editar",[PostController::class,"Editar"])->name('post.editar');
Route::patch("/post/{post}",[PostController::class,"update"]);


Route::get("/logout",[AutenticacionController::class,"Logout"])
-> middleware(Autenticacion::class);

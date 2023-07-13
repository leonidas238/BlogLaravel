<?php

use App\Http\Controllers\Autenticacion\LoginUsuarioController;
use App\Http\Controllers\Autenticacion\RegistroUsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Autenticacion;


Route::get("/",[PostController::class,"index"]);
Route::view("/registrar", 'user.registrar')->name('registrar');
Route::post("/registrar",[RegistroUsuarioController::class,'store']);
Route::view("/login","user.login")->name('login');
Route::post("/login",[LoginUsuarioController::class,'store']);
Route::get("/logout",[LoginUsuarioController::class,'destroy'])->name('loguout');

Route::get("/logueado",[PostController::class,"ListarPorAutor"])->name('logueado');;
Route::get("/post.crear",[PostController::class,"Crear"])->name('post.crear');
Route::post("/post",[PostController::class,"store"])->name('post.store');
Route::get("/post/{post}",[PostController::class,"show"]);
Route::get("/post/{post}/editar",[PostController::class,"Editar"])->name('post.editar');
Route::patch("/post/{post}",[PostController::class,"update"]);



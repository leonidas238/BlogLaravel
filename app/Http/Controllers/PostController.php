<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Crear(Request $request){
        $v = new Post();
        $v -> nombre = $request -> post("titulo");
        $v -> genero = $request -> post("cuerpo");
        $v -> save();

        return redirect("/post")->with("creado",true);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function Listar(Request $request){
        $u=Post::simplePaginate(3);
        return view("index",[ 
            'posts' => $u
        ]);

    }

    public function ListarPorAutor(Request $request){
        $u=Post::where('user_id',Auth::User()->id)->simplePaginate(3);
        return view("user.logueado",[ 
            'posts' => $u
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

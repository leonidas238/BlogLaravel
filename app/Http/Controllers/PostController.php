<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Hr;

class PostController extends Controller
{
    public function index(Request $request){
        $u=Post::simplePaginate(3);
        return view("index",[ 
            'posts' => $u
        ]);
    }

    public function Crear(Request $request){
        return view("post.crear");
    }
    
    public function ListarPorAutor(Request $request){
        $u=Post::where('user_id',Auth::User()->id)->simplePaginate(3);
        return view("logueado",[ 
            'posts' => $u
        ]);
    }
    
    public function store(Request $request){
        $post = new Post;
        $post->titulo = $request->input('titulo');
        $post->cuerpo = $request->input('cuerpo');
        $post->user_id = Auth::User()->id;
        $post->save();
        
        session()->flash('status','Post creado ..!!');
        return to_route('user.logueado');
    }
    
    public function destroy(Post $post)
    {
        
    }
    
    public function show(Post $post){
        return $post;
    }
    
    public function Editar(Post $post){
        return view('post.editar',['posts' => $post]);
    }

    public function update(Post $post){
    }
}



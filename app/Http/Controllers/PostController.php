<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    public function Crear(Request $request){
        $v = new Post();
        $v -> nombre = $request -> post("titulo");
        $v -> genero = $request -> post("cuerpo");
        $v -> save();

        return redirect("/post")->with("creado",true);
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
    
    public function Editar(Post $post){
       return view('post.editar', ['post'=> $post]);
    }
    
    public function update(Post $post){
       return view('post.editar', ['post'=> $post]);
    }

    public function destroy(Post $post)
    {

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class postController extends Controller
{
    public function index(){

        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function calidad(){

        $calidad = Post::get();

        return view('posts.calidad', ['calidad' => $calidad]);
    }
    
    public function produccion(){

        $produccion = Post::get();

        return view('posts.produccion', ['produccion' => $produccion]);
    }
    
    public function supervisor(){

        $supervisor = Post::get();

        return view('posts.supervisor', ['supervisor' => $supervisor]);
    }
    
    public function sistemas(){

        $sistemas = Post::get();

        return view('posts.sistemas', ['sistemas' => $sistemas]);
    }
    
    public function rh(){

        $rh = Post::get();

        return view('posts.rh', ['rh' => $rh]);
    }

    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $request->validate([
            'Nombre' => ['required'],
            'Apellido' => ['required'],
            'Edad' => ['required'],
            'Puesto' => ['required'],
            'Ruta' => ['required'],
            'Grado_Academico' => ['required'],
            'Fecha_ingreso' => ['required'],
            'avatar' => ['required'],
        ]);

        $post = new Post;

        if ($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $destino = 'assets/images/Empleados/';
            $nombreimg = $request->input('Nombre') . '.' . $file->getClientOriginalExtension();
            $upload = $request->file("avatar")->move($destino, $nombreimg);
            $post->image_path = $destino . $nombreimg;
        }

        $post->Nombre = ucfirst(strtolower($request->input('Nombre')));
        $post->Apellido = ucfirst(strtolower($request->input('Apellido')));
        $post->Edad = $request->input('Edad');
        $post->Puesto = ucfirst(strtolower($request->input('Puesto')));
        $post->Ruta = ucfirst(strtolower($request->input('Ruta')));
        $post->Grado_Academico = ucfirst(strtolower($request->input('Grado_Academico')));
        $post->Fecha_ingreso = ucfirst(strtolower($request->input('Fecha_ingreso')));
        $post->save();

        session()->flash('status', 'Agregado correctamente');

        return to_route('home');
    }
}

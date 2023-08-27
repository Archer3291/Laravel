<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class postController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['home']]);
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
        return view('posts.create', ['post' => new Post]);
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
            'image_path' => ['required'],
        ]);

        if ($request->hasFile('image_path'))
        {
            $file = $request->file('image_path');
            $destino = 'assets/images/Empleados/';
            $nombreimg = $request->input('Nombre') . '.' . $file->getClientOriginalExtension();
            $upload = $request->file("image_path")->move($destino, $nombreimg);
        };

        Post::Create([
            'image_path' => $destino . $nombreimg,
            'Nombre' => $request -> input('Nombre'),
            'Apellido' => $request -> input('Apellido'),
            'Edad' => $request -> input('Edad'),
            'Puesto' => $request -> input('Puesto'),
            'Ruta' => $request -> input('Ruta'),
            'Grado_Academico' => $request -> input('Grado_Academico'),
            'Fecha_ingreso' => $request -> input('Fecha_ingreso'),
        ]);
        
        return to_route('home')->with('status', 'Agregado correctamente');
    }

    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post){

        $request->validate([ // Validacion de datos en el formulario editarf
            'Nombre' => ['required'],
            'Apellido' => ['required'],
            'Edad' => ['required'],
            'Puesto' => ['required'],
            'Ruta' => ['required'],
            'Grado_Academico' => ['required'],
            'Fecha_ingreso' => ['required'],
            'image_path' => ['required'],
        ]);

        if ($request->hasFile('image_path'))
        {
            $file = $request->file('image_path');
            $destino = 'assets/images/Empleados/';
            $nombreimg = $request->input('Nombre') . '.' . $file->getClientOriginalExtension();
            $upload = $request->file("image_path")->move($destino, $nombreimg);
        }

        $post->update([
            'image_path' => $destino . $nombreimg,
            'Nombre' => $request -> input('Nombre'),
            'Apellido' => $request -> input('Apellido'),
            'Edad' => $request -> input('Edad'),
            'Puesto' => $request -> input('Puesto'),
            'Ruta' => $request -> input('Ruta'),
            'Grado_Academico' => $request -> input('Grado_Academico'),
            'Fecha_ingreso' => $request -> input('Fecha_ingreso'),
        ]);

        return to_route('home')->with('status', 'Editado correctamente');
    }

    public function destroy(Post $post){
        $post->delete();
        return to_route('home')->with('status', 'Eliminado correctamente');
    }
}

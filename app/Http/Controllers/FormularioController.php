<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class FormularioController extends Controller
{
    public function mandarSolicitud(Request $request){
        // return $request;

        ///////// VALIDACION DE FORMULARIO
        $request->validate([
            "nombre"=>"required",
            "correo"=>"required|email",
            "idea"=>"required",
            "tag"=>"required",
            ]);

        ////// CREACION DE POST
        $data = new Post();
        $data->nombre = $request->nombre;
        $data->idea = $request->idea;
        $data->correo = $request->correo;
        $data->estado = 2;
        $data->save();

        // return $data;

        
        // return $data;
        // return redirect().route("pg.index");


        $busqueda = Tag::where("nombre" ,"=",$request->tag)->take(1)->get();
        // return $busqueda;
        if($busqueda->isEmpty())
        {
            $nuevotag = new Tag();
            $nuevotag->nombre = $request->tag;
            $nuevotag->slug = $request->tag;
            $nuevotag->save();

            $dataPost = Post::find($data->id);
            $dataPost->tagsRelacion()->attach([$nuevotag->id]);  

        }
        else{

            $dataPost = Post::find($data->id);
            $dataPost->tagsRelacion()->attach([$busqueda[0]->id]);  
        }
        // return $busqueda;
        // return Tag::where("nombre" ,"=","prueba")->get();
        // return $request->tag;

        return view("subirIdea", compact("data"));
        
        
        
    }
}

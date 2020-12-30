<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function mandarSolicitud(Request $request){
        // return $request;
        $request->validate([
            "nombre"=>"required",
            "correo"=>"required|email",
            "idea"=>"required",
            "tag"=>"required",
            ]);
        $data = new Post();
        $data->nombre = $request->nombre;
        $data->idea = $request->idea;
        $data->correo = $request->correo;
        $data->estado = 2;


        // return $data;

        $data->save();
        // return $data;
        // return redirect().route("pg.index");

        $dataPost = Post::find($data->id);
        $dataPost->tagsRelacion()->attach([1,2]);   
        return view("subirIdea", compact("data"));
    }
}

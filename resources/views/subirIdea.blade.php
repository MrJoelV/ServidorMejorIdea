@extends("diseños.app")

@section("title","Gracias!")

@section("content")

    
    <div class="">
        <div class="pt-5">
            @include('alertas.alerta', [
            'titulo' => "Gracias!",
            'cuerpo' => "Tu idea se ha publicado correctamente!",
            ]) 
        </div>


    
    <p class="mx-auto text-center">
    Asi se mostrara tu aportacion:
    </p>

        @include('diseños.tileIdea', [
            'cuerpoTile' => $data->idea,
            'tags' => $data->tagsRelacion,
            'fecha' => $data->created_at
            ])  

        <div class=" mt-5 pb-10 text-center">
            <button class="mx-auto text-center">
                <a href="{{route("pg.index")}}" class="text-center text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"> Regresar!</a>
            </button>
        </div>




@endsection()

@extends("diseños.app")
<style>
    footer {
   text-align: center;
   font-family: sans-serif;
   /* color: whitesmoke; */
   width: 100%;
   bottom: 0;      
   position:fixed;
}
</style>
@section("title","Gracias!")

@section("content")

    
    <div class="content bg-white">
        <div class="pt-5">
            @include('alertas.alerta', [
            'titulo' => "Gracias!",
            'cuerpo' => "Tu idea se ha publicado correctamente!",
            ]) 
        </div>


    
        <div class="mt-10 mb-10">
            <p class="text-center">
                Asi se mostrara tu aportacion:
                </p>
        </div>

                <div class="mx-10">
                @include('diseños.tileIdea', [
                'nombre' => $data->nombre,
                'cuerpoTile' => $data->idea,
                'tags' => $data->tagsRelacion,
                'fecha' => $data->created_at
                ]) 
                </div> 

        <div class=" mt-5 pb-10  text-center">
            <button class="mx-auto text-center">
                <a href="{{route("pg.index")}}" class="text-center text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"> Regresar!</a>
            </button>
        </div>

        
        
        
        

@endsection()

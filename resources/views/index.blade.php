@extends("diseños.app")

@section("title","Home")

@section("content")
{{-- dasdasdasdasd --}}
    <div class="container bg-center mx-auto ">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 p-10">


 
           <div>
            @foreach ($posts as $item)
            {{-- {{$item->idea}} --}}
            {{-- {{$item->tagsRelacion}} --}}
                 {{-- @foreach ($item->tagsRelacion as $tag)
                     {{$tag}}
                 @endforeach --}}
            @include('diseños.tileIdea', [
                'nombre' => $item->nombre,
                'cuerpoTile' => $item->idea,
                'tags' => $item->tagsRelacion,
                'fecha' => $item->created_at
                ])  
            @endforeach
           </div>

           <div class="row-span-3 lg:col-start-2 lg:row-start-1">
            @include('diseños.formulario')
           </div>




           

    
    
        </div>
    </div>
@endsection()

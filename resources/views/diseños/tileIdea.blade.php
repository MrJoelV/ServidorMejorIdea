
    <div class="max-w-2xl mx-auto px-8 py-4 bg-white dark:bg-gray-800 rounded-lg shadow-md m-2">
        <div class="flex justify-between items-center">
            <span class="font-light text-gray-600 dark:text-gray-400 text-sm">{{$fecha}}</span>
                <div>
                    @foreach ($tags as $tag)
                    <a class="px-2 py-1 m-1 bg-gray-600 text-gray-100 text-sm font-bold rounded hover:bg-gray-500">
                        {{$tag->nombre}}
                    </a>
                    @endforeach
                </div>
                
        </div>

        <div class="mt-2">
            {{-- <a href="#" class="text-2xl text-gray-700 dark:text-white font-bold hover:text-gray-600 dark:hover:text-gray-200 hover:underline">
                Accessibility tools for designers and developers
            </a> --}}
            <p class="mt-2 inline-block text-gray-600 dark:text-gray-300">
                {{$cuerpoTile}}
                {{-- @yield('cuerpoTile') --}}
            </p>
        </div>
        
        <div class="flex justify-end">
            <a class="text-gray-700 dark:text-gray-200 font-bold cursor-pointer">{{$nombre}}</a>
        </div>
    </div>
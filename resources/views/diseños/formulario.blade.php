

    <div class="bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg  font-medium title-font">Mandanos tu idea</h2>
      <p class="leading-relaxed mb-5 text-gray-600">
        Mandanos tu idea, tu opinion o algun consejo, tema libre!
      </p>
      {{-- {{route("contactanos")}} --}}
      <form action="{{route("contactanos")}}" method="POST">
        @csrf


       
        @error('nombre')<p><strong>-Rellena el campo Nombre</strong>@enderror
        @error('correo')<p><strong>-Rellena con un correo valido</strong></p>@enderror
        @error('tag')<p><strong>-Escribe una etiqueta</strong></p>@enderror
        @error('idea')<p><strong>-Te falto ingresar la idea</strong></p>@enderror
        
       

        <div class="grid grid-cols-2">

          <div class="relative mr-3">
            <label  class="text-sm text-gray-600">Nombre</label>
            <input type="text" name="nombre" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-6 transition-colors duration-200 ease-in-out">
          </div>
  
          <div class="relative mb-1">
            <label for="email" class=" text-sm text-gray-600">Correo</label>
            <input type="email" name="correo" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-6 transition-colors duration-200 ease-in-out">
          </div>
  
        </div>
        <div class="relative mb-1">
          <label class="text-sm text-gray-600">Etiqueta</label>
          <input type="text" name="tag" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-6 transition-colors duration-200 ease-in-out">
        </div>
  
  
  
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Idea!</label>
          <textarea name="idea" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        
        <div class=" text-center">
          <button type="submit" class="text-center text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Mandar idea!</button>
        </div>
        <p class="text-xs text-gray-500 mt-3">Tus datos personales no seran mostrados en el sitio web.</p>

      </form>
    </div>

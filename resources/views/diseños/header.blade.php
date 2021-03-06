
    <!-- Require css -->
    <style>
    .scroll-hidden::-webkit-scrollbar {
        height: 0px;
        background: transparent; /* make scrollbar transparent */
    }
    </style>

<header>
    <head>
        <nav class="bg-blue-400 dark:bg-gray-800 shadow">
            <div class="container mx-auto px-6 py-3">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-5" src="{{ asset('images/icono.png') }}" alt="">
                            <a class="text-white dark:text-white text-xl font-bold md:text-2xl hover:text-white-700 dark:hover:text-gray-300" href="{{route("pg.index")}}">Tu mejor Idea</a>
    
                            <!-- Search input on desktop screen -->
                            <div class="mx-10 hidden md:block">
                                {{-- <input type="text" class="w-32 lg:w-64 px-4 py-3 leading-tight text-sm text-gray-700 dark:text-gray-200 bg-gray-200 dark:bg-gray-900 rounded-md placeholder-gray-500 dark:placeholder-gray-200 border border-transparent focus:outline-none focus:bg-white focus:ring focus:border-blue-400" placeholder="Buscar" aria-label="Buscar"> --}}
                            </div>
                        </div>
    
                        <!-- Mobile menu button -->
                        {{-- <div class="flex md:hidden">
                            <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                    <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                </svg>
                            </button>
                        </div> --}}
                    </div>
    
                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div class="hidden md:flex items-center">
                        <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1">
                            {{-- <a class="my-1 text-sm text-white-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline md:mx-4 md:my-0" href="#">Home</a> --}}
                            {{-- <a class="my-1 text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline md:mx-4 md:my-0" href="#">Blog</a>
                            <a class="my-1 text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline md:mx-4 md:my-0" href="#">Compoents</a>
                            <a class="my-1 text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline md:mx-4 md:my-0" href="#">Courses</a> --}}
                        </div>
    
                        <div class="flex items-center py-2 -mx-1 md:mx-0">
                            {{-- <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-gray-500 font-medium text-white leading-5 hover:bg-blue-600 md:mx-2 md:w-auto" href="#">Login</a> --}}
                            <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-blue-600 font-medium text-white leading-5 hover:bg-blue-600 md:mx-0 md:w-auto" href="{{ route('login') }}">Ingresar</a>
                        </div>
    
                        <!-- Search input on mobile screen -->
                        <div class="mt-3 md:hidden">
                            {{-- <input type="text" class="w-full px-4 py-3 leading-tight text-sm text-gray-700 bg-gray-100 rounded-md placeholder-gray-500 focus:outline-none focus:bg-white focus:shadow-outline" placeholder="Buscar" aria-label="Buscar"> --}}
                        </div>
                    </div>
                </div>
    
                {{-- <div class="mt-3 py-3 -mx-3 overflow-y-auto whitespace-nowrap scroll-hidden">
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">News</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Articles</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Videos</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Tricks</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">PHP</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Laravel</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Vue</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">React</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Tailwindcss</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Meraki UI</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">CPP</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">JavaScript</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Ruby</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Mysql</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Pest</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">PHPUnit</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Netlify</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">VS Code</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">PHPStorm</a>
                    <a class="text-sm text-gray-700 dark:text-gray-200 leading-5 hover:text-blue-600 dark:hover:text-indigo-400 hover:underline mx-4 md:my-0" href="#">Sublime</a>
                </div> --}}
            </div>
        </nav>
    </head>
</header>

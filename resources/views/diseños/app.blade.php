<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    {{-- <link rel="stylesheet" href=""> --}}
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <!-- favicon -->

    <!-- estilos -->


    <style>
        .active{
            /* border-color: aqua; */
            color: seagreen;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <!-- header -->
    @include('diseños.header')
    <!-- nav -->
    <div class="bg-blue-100">
        @yield("content")
    </div>

    <!-- footer  -->
    

    @include('diseños.footer')

    <!-- script  -->
</body>
</html>
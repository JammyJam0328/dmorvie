<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>D'Morvie Suites</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        <style>
            [x-cloak] { display: none !important; }
        </style>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gradient-to-tr from-gray-100 to-gray-300  bg-cover h-screen">
       
        <img src="https://images.unsplash.com/photo-1541971875076-8f970d573be6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" class="absolute top-0  bg-cover h-full w-full" alt="">
       <div class=" h-full relative flex items-center justify-center  bg-gray-700 bg-opacity-80">
        <div class="p-4  flex items-center justify-center max-w-7xl mx-auto">
           <div class="bg-gray-600 relative w bg-opacity-50 p-2 py-10 px-10 lg:px-40 rounded-lg shadow-lg">
            {{$slot}}
            
           </div>
        </div>
        <div class="absolute bottom-0 lg:right-10">
            <span class="uppercase font-poppins text-gray-300">Powered By: J7 IT SOLUTION</span>
        </div>
       </div>
        @livewireScripts
    </body>
</html>

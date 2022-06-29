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
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased overflow-y-hidden">
    <!--
  This example requires Tailwind CSS v2.0+
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <!-- Background color split screen for large screens -->
    <div class="fixed top-0 left-0 w-1/2 h-full  bg-white" aria-hidden="true"></div>
    <div class="fixed top-0 right-0 w-1/2 h-full bg-gray-300" aria-hidden="true"></div>
    <div class="relative min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="flex-shrink-0 bg-white">
            <div class="max-w-full mx-auto px-2 sm:px-4 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <!-- Logo section -->
                    <div class="flex items-center justify-center  px-2 lg:px-0 xl:w-64">
                        <div class="flex-shrink-0 flex items-end space-x-1">
                            <img class="h-8 w-auto" src="{{ asset('images/dmorvielogo.png') }}" class="h-16"
                                alt="Workflow">
                            <h1 class="text-gray-700 text-xl font-bold font-poppins">D'MORVIE SUITES</h1>
                        </div>
                    </div>

                    <!-- Search section -->

                    <div class="flex lg:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="bg-indigo-600 inline-flex items-center justify-center p-2 rounded-md text-indigo-400 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu-alt-1

              Menu open: "hidden", Menu closed: "block"
            -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <!-- Links section -->
                    <div class="hidden lg:block lg:w-80">
                       <h1 class="text-lg font-bold uppercase font-inter text-center rounded-full bg-gradient-to-r from-gray-200 to-gray-400 text-gray-700"> {{auth()->user()->branch->name}}</h1>
                    </div>
                </div>
            </div>

        </nav>

        <div class="bg-gray-300 flex h-10 ">
            <div class=" flex relative justify-center items-center w-72">
                <div class="bg-gray-300 absolute rounded-full p-2.5 ">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                        class="h-12 bg-gray-100 ring-4 ring-gray-600 shadow-lg rounded-full">
                        <path fill="#111315"
                            d="M45,27H19c.166,4.5-2.695,8.123-4.457,11.046a1,1,0,0,0,.431,1.423A39.719,39.719,0,0,0,32,43a39.719,39.719,0,0,0,17.026-3.531,1,1,0,0,0,.431-1.423C47.7,35.123,44.834,31.5,45,27Z" />
                        <path fill="#ffd5c5"
                            d="M50.04,47.97a57.7,57.7,0,0,0-10.318-5.228C38.551,41.674,37.418,39.047,37,38V36H27v2c-.418,1.051-1.551,3.678-2.722,4.746A57.7,57.7,0,0,0,13.96,47.97,15.638,15.638,0,0,0,7,61H57A15.638,15.638,0,0,0,50.04,47.97Z" />
                        <path fill="#d1d3d4"
                            d="M50.04,47.97a56.836,56.836,0,0,0-10.13-5.15L32,46.1,24.09,42.82a56.836,56.836,0,0,0-10.13,5.15A15.638,15.638,0,0,0,7,61H57A15.638,15.638,0,0,0,50.04,47.97Z" />
                        <path fill="#f4a490"
                            d="M27,36v2a23.907,23.907,0,0,1-1.531,3.172,14.687,14.687,0,0,0,13.062,0A23.907,23.907,0,0,1,37,38V36Z" />
                        <path fill="#ffd5c5" d="M21,17V31.5c0,5.049,4.925,9.2,11,9.2s11-4.151,11-9.2V17Z" />
                        <path fill="#e6e7e8"
                            d="M57,61H25V51.672a4,4,0,0,1,2.468-3.695L39.91,42.82a56.836,56.836,0,0,1,10.13,5.15A15.638,15.638,0,0,1,57,61Z" />
                        <path fill="#f4a490" d="M21 31a4 4 0 010-8zM43 31a4 4 0 000-8z" />
                        <path fill="#e6e7e8"
                            d="M44,9a8.171,8.171,0,0,0-5,.5,7.019,7.019,0,0,0-14,0A8.171,8.171,0,0,0,20,9a6.271,6.271,0,0,0-5,6,7.5,7.5,0,0,0,6,7v4a40.537,40.537,0,0,1,22,0V22c4,0,6.237-3.116,6-7A6.487,6.487,0,0,0,44,9Z" />
                        <path fill="#d1d3d4" d="M43,22v4a40.5,40.5,0,0,0-22,0V22A40.5,40.5,0,0,1,43,22Z" />
                        <circle cx="29" cy="52" r="1" fill="#a7a9ac" />
                        <circle cx="29" cy="57" r="1" fill="#a7a9ac" />
                        <circle cx="35" cy="52" r="1" fill="#a7a9ac" />
                        <circle cx="35" cy="57" r="1" fill="#a7a9ac" />
                        <path fill="#a7a9ac" d="M17 61V57a1 1 0 00-2 0v4zM49 61V57a1 1 0 00-2 0v4z" />
                        <path fill="#f4a490"
                            d="M39.655 28.442a1 1 0 00-1.4.148 1.55 1.55 0 01-2.489-.08.99.99 0 00-1.414 0 1 1 0 000 1.414 3.544 3.544 0 005.468-.089A.994.994 0 0039.655 28.442zM29.568 28.442a1 1 0 00-1.4.148 1.55 1.55 0 01-2.489-.08.99.99 0 00-1.414 0 1 1 0 000 1.414 3.544 3.544 0 005.468-.089A.994.994 0 0029.568 28.442zM34.7 33.843a.981.981 0 00-1.414.01 1.779 1.779 0 01-2.576 0 .981.981 0 00-1.414-.01 1.009 1.009 0 00-.01 1.414 3.8 3.8 0 005.424 0A1.009 1.009 0 0034.7 33.843z" />
                        <path fill="#d1d3d4"
                            d="M30.169,13.257a6.757,6.757,0,0,0-3.757-4.668,1,1,0,0,0-.824,1.822,4.76,4.76,0,0,1,2.645,3.351,1,1,0,0,0,1.936-.505Z" />
                    </svg>
                </div>
            </div>

        </div>
        <!-- 3 column wrapper -->
        <div class="flex-grow w-full max-w-full mx-auto xl:px-8 lg:flex">
            <!-- Left sidebar & main wrapper -->
            <div class="flex-1 min-w-0   xl:flex">
                <div class=" xl:border-b-0 xl:flex-shrink-0 xl:w-64   bg-white">
                    <div class="h-full pl-4 pr-6 py-6 sm:pl-6 lg:pl-8 xl:pl-0">
                        <!-- Start left column area -->
                        <div class="h-full relative" style="min-height: 12rem">
                            <div class="absolute inset-0 rounded-lg">
                                <div class="text-center text-gray-700">
                                    <h1 class="font-inter underline font-bold text-lg">kitchendmrs@gmail.com</h1>
                                    <div class="flex items-center justify-center space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="h-5 w-5">
                                            <path
                                                d="M32,13A19,19,0,1,0,51,32,19.021,19.021,0,0,0,32,13Zm0,36A17,17,0,1,1,49,32,17.019,17.019,0,0,1,32,49Z" />
                                            <path
                                                d="M13 21V11H11v9H10V11H8v9H7V11H5v9H4V11H2V26a3.006 3.006 0 0 0 2 2.829V52a3 3 0 0 0 3 3H8a3 3 0 0 0 3-3V28.829A3.006 3.006 0 0 0 13 26zm-2 5a1 1 0 0 1-1 1 1 1 0 0 0-1 1V52a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V28a1 1 0 0 0-1-1 1 1 0 0 1-1-1V22h7zM61 10a9.01 9.01 0 0 0-9 9V32a3 3 0 0 0 3 3V54a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V11A1 1 0 0 0 61 10zM60 53H57V34a1 1 0 0 0-1-1H55a1 1 0 0 1-1-1V19a7.011 7.011 0 0 1 6-6.929z" />
                                            <rect width="2" height="15" x="55" y="16" />
                                            <path
                                                d="M32,22A10,10,0,1,0,42,32,10.011,10.011,0,0,0,32,22Zm0,18a8,8,0,1,1,8-8A8.009,8.009,0,0,1,32,40Z" />
                                        </svg>
                                        <span class="font-semibold">Kitchen</span>
                                    </div>
                                </div>
                                <div class="py-5 ">
                                  <ul role="list" class="grid grid-cols-1 gap-6 px-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2">
                                    <a href="{{route('kitchen')}}" class=" {{Request::routeIs('kitchen') ? 'bg-gray-500 text-white' : 'text-gray-400'}} col-span-1 flex flex-col text-center cursor-pointer hover:bg-gray-500 hover:text-white bg-gray-100 rounded-2xl shadow-lg divide-y divide-gray-200">
                                      <div class="flex-1 flex items-center flex-col p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 20 20" fill="currentColor">
                                          <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                        </svg>
                                        <h3 class="uppercase font-inter font-semibold">Home</h3>
                                       
                                      </div>
                                    
                                    </a>
                                    <a href="{{route('kitchen.order')}}" class="{{Request::routeIs('kitchen.order') ? 'bg-gray-500 text-white' : 'text-gray-400'}} col-span-1 flex flex-col text-center cursor-pointer hover:bg-gray-500 hover:text-white  bg-gray-100 rounded-2xl shadow-lg divide-y divide-gray-200">
                                      <div class="flex-1 flex items-center flex-col p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 20 20" fill="currentColor">
                                          <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                          <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <h3 class="uppercase font-inter font-semibold">Order</h3>
                                      </div>
                                    </a>
                                    <a class="col-span-1 flex flex-col text-center cursor-pointer hover:bg-gray-500 hover:text-white text-gray-400 bg-gray-100 rounded-2xl shadow-lg divide-y divide-gray-200">
                                      <div class="flex-1 flex items-center flex-col p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
                                          </svg>
                                        <h3 class="uppercase font-inter font-semibold">MENU</h3>
                                      </div>
                                    </a>
                                    <a class="col-span-1 flex flex-col text-center cursor-pointer hover:bg-gray-500 hover:text-white text-gray-400 bg-gray-100 rounded-2xl shadow-lg divide-y divide-gray-200">
                                      <div class="flex-1 flex items-center flex-col p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                          </svg>
                                        <h3 class="uppercase font-inter font-semibold">SETTINGS</h3>
                                      </div>
                                    </a>
                                    <!-- More people... -->
                                  </ul>
                                </div>
                                <div class=" absolute bottom-5 py-2">
                                    <x-button right-icon="logout" dark label="Log Out" />
                                </div>
                            </div>
                        </div>
                        <!-- End left column area -->
                    </div>
                </div>

                <div class="bg-gray-300 lg:min-w-0 lg:flex-1">
                    <div class="h-full font-inter">
                        <div class="bg-white rounded-r-xl py-2 pr-4 text-gray-600">
                           @yield('breadcrumbs')
                        </div>
                        <!-- Start main area-->
                        <div class="relative h-full" style="min-height: 36rem">
                            <div class="absolute inset-0 py-4 pl-4 ">
                                <div class="h-4/5 overflow-y-auto">
                                    @yield('main')
                                </div>
                            </div>
                        </div>
                        <!-- End main area -->
                    </div>
                </div>
            </div>

           @if (Request::routeIs('kitchen.order'))
           <div class=" bg-gray-300 pr-4 sm:pr-6 lg:pr-8 lg:flex-shrink-0  xl:pr-0">
            <div class="h-full pl-2  lg:w-80">
                <!-- Start right column area -->
                <div class="h-full relative" style="min-height: 16rem">
                    <div class="absolute inset-0  bg-white  rounded-lg">@yield('order-transaction')</div>
                </div>
                <!-- End right column area -->
            </div>
        </div>
           @endif
        </div>
    </div>

    @livewireScripts
</body>

</html>

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
    <wireui:scripts />
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased overflow-y-hidden">
    <x-notifications z-index="z-50" />
   <div class="bg-gray-300">
    <nav class="flex-shrink-0 bg-white">
        <div class="max-w-full mx-auto  sm:px-4 lg:px-8">
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
                <div class="hidden lg:block lg:w-80 ">
                  <div class="flex items-center justify-center space-x-3 relative" x-data="{dropdown:false}">
                    <h1 class="text-lg font-bold uppercase font-inter text-center underline text-gray-700"> {{auth()->user()->branch->name}}</h1>
                    <button class="border-gray-500" x-on:click="dropdown=!dropdown" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" :class="dropdown == true ? 'ring-green-500': ''"
                                        class="h-10 bg-gray-100 ring-4 ring-gray-600  hover:ring-green-500 shadow-lg rounded-full">
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
                    </button>
                    <div x-show="dropdown"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    x-cloak class="origin-top-right z-30 absolute top-10 right-5 mt-2 w-56 border border-green-500 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        
                        <div class="px-4 py-3 relative font-inter" role="none">
                          <p class="text-sm" role="none">Signed in as</p>
                          <p class="text-sm font-medium text-gray-700 truncate" role="none">{{auth()->user()->email}}</p>

                          <div class="absolute top-0 right-6 h-10 w-2 bg-green-500 shadow-lg"></div>
                        </div>
                      
                        <div class="py-1" role="none">
                          <form method="POST"  action="{{ route('logout') }}" role="none">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();" type="submit"   class="text-gray-700 w-full flex items-center font-semibold font-poppins space-x-2 text-left px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span>Sign out</span>
                            </a>
                          </form>
                          {{-- <form method="POST"
                          action="{{ route('logout') }}"
                          x-data>
                          @csrf
                          <x-button href="{{ route('logout') }}"
                              @click.prevent="$root.submit();"
                              white
                              icon="logout">
                              LOG OUT
                          </x-button>
                      </form> --}}
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>

    </nav>
    <div class="h-5 bg-gray-300"></div>
        <div class="h-screen max-w-full mx-auto px-2 sm:px-4 lg:px-12">
            <div class="grid-cols-4 grid gap-6 h-full">
                <div class=" col-span-3  ">
                   
                    <div class="grid-cols-4 grid  bg-white rounded-lg shadow-lg py-2 px-2">
                        <div class="p-1">
                            <div class=" relative border-r">
                                    <div class="flex items-center px-2">
                                        <div class="flex-shrink-0">
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                                        class="h-10 bg-gray-100 ring-4 ring-gray-600 shadow-lg rounded-full">
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
                                        <div class="ml-3 min-w-0 flex-1 font-inter">
                                          <div class="text-base font-semibold text-gray-800 uppercase truncate">Jane Doe</div>
                                          <div class="text-sm font-medium text-gray-500 truncate">kitchendmrs@gmail.com</div>
                                        </div>
                                        
                                      </div>
                        </div>
                        </div>
                        <div class="bg-white col-span-3 px-2">
                            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 font-poppins lg:grid-cols-4">
                                <a href="{{route('kitchen')}}" 
                                    class="{{Request::routeIs('kitchen') ? 'bg-gray-500 text-white' : 'text-gray-700'}} col-span-1 bg-white rounded-lg shadow border hover:bg-gray-500 hover:text-white  divide-y divide-gray-200">
                                    <div class="w-full flex items-center justify-center space-x-2 py-3">
                    
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                        <span class="font-bold">HOME</span>
                                    </div>
                                </a>
                                <a href="{{route('kitchen.order')}}"
                                    class="{{Request::routeIs('kitchen.order') ? 'bg-gray-500 text-white' : 'text-gray-700'}} col-span-1 bg-white rounded-lg shadow border hover:bg-gray-500 hover:text-white  divide-y divide-gray-200">
                                    <div class="w-full flex items-center justify-center space-x-2 py-3">
                    
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shopping-bag">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                        <span class="font-bold">ORDER</span>
                                    </div>
                                </a>
                                <a href="{{route('kitchen.menu')}}"
                                    class=" {{Request::routeIs('kitchen.menu') ? 'bg-gray-500 text-white' : 'text-gray-700'}}  col-span-1 bg-white text-gray-700 rounded-lg shadow border hover:bg-gray-500 hover:text-white  divide-y divide-gray-200">
                                    <div class="w-full flex items-center justify-center space-x-2 py-3">
                    
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-grid">
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                        <span class="font-bold">MENU</span>
                                    </div>
                                </a>
                                <a href=""
                                    class="col-span-1 bg-white text-gray-700 rounded-lg shadow border hover:bg-gray-500 hover:text-white  divide-y divide-gray-200">
                                    <div class="w-full flex items-center justify-center space-x-2 py-3">
                    
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-settings">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                        <span class="font-bold">SETTINGS</span>
                                    </div>
                                </a>
                    
                                <!-- More people... -->
                            </ul>
                        </div>
                     
                    </div>
                   <main class="mt-3">
                    @yield('main')
                   </main>
                </div>
                <div class="side relative ">
                @if (Request::routeIs('kitchen.order'))
                    @yield('side-panel')
                @else
                <div class="bg-white p-2 rounded-lg shadow-lg">
                    <div class="flex justify-between border-b items-center">
                     <h1 class="font-inter font-bold text-gray-700">RECENT ORDERS</h1>
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </div>
                    <div class="mt-2">
                     <h1 class="text-center text-sm italic">No Orders Available</h1>
                    </div>
                  </div>
                @endif
                </div>
            </div>
        </div>
   </div>

    @livewireScripts
</body>

</html>

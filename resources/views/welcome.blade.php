<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>D'MORVIE SUITES</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased overflow-hidden">
    <div class="relative bg-white overflow-hidden">
        <img src="{{ asset('images/dmorvielogo.png') }}" class="absolute bottom-28 -left-20 opacity-5" alt="">
        <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
            <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784"
                fill="none" viewBox="0 0 640 784">
                <defs>
                    <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20"
                        height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-blue-300"
                            fill="currentColor" />
                    </pattern>
                </defs>
                <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
            </svg>
        </div>
        <div
            class="bg-blue-300 absolute top-0 left-1/2 transform translate-x-64 -translate-y-8 h-full mt-20 w-full bg-opacity-50 rounded-l-lg">
            <div class="relative  h-full">
                <img src="https://images.unsplash.com/photo-1541971875076-8f970d573be6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                    class="absolute top-0 rounded-l-lg shadow-xl opacity-50" alt="">
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
            <div>
                <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6"
                    aria-label="Global">
                    <div class="flex items-center flex-1">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only">Workflow</span>
                                <img class="h-8 w-auto sm:h-10" src="{{ asset('images/dmorvielogo.png') }}"
                                    alt="">
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                    aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Heroicon name: outline/menu -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        {{-- <div class="hidden md:block md:ml-10 md:space-x-10">
                      <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Product</a>
          
                      <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Features</a>
          
                      <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Marketplace</a>
          
                      <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a>
                    </div> --}}
                    </div>

                </nav>

                <!--
                  Mobile menu, show/hide based on menu open state.
          
                  Entering: "duration-150 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                  Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                            </div>
                            <div class="-mr-2">
                                <button type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close main menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-2 pt-2 pb-3 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a>
                        </div>

                    </div>
                </div>
            </div>

            <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-16 ">
                <div class="lg:grid lg:grid-cols-12 lg:gap-2">
                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                        <h1>
                            <span
                                class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">Welcome</span>
                            <span class="mt-1 block text-4xl tracking-tight  ">
                                <span class="block uppercase text-6xl font-black font-inter text-gray-700">D'Morvie
                                    Suites</span>
                                <span class="block font-inter text-2xl font-bold text-blue-900">Your Cheaper and
                                    Satisfying Stay in Town</span>
                            </span>
                        </h1>
                        <p class="mt-3 text-sm text-gray-700 font-inter ">Our Branches:</p>
                        <div class=" max-w-lg mx-auto grid gap-3 lg:grid-cols-4 lg:max-w-none">
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            D'Morvie Suites
                                        </p>
                                        <p class="text-xs text-gray-700">San Pedro Street, Davao City</p>
                                    </div>

                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            Alma Residences
                                        </p>
                                        <p class="text-xs text-gray-700">Iligan City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            Alma Residences
                                        </p>
                                        <p class="text-xs text-gray-700">Near SM, General Santos City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            Alming Guest House
                                        </p>
                                        <p class="text-xs text-gray-700">Bry. San Miguel, Iligan City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            D'Morvie Suites
                                        </p>
                                        <p class="text-xs text-gray-700">Lapasan, Cagayan de Oro City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            D'Morvie Suites
                                        </p>
                                        <p class="text-xs text-gray-700">Yacapin Corner Velez Streets, Cagayan de Oro
                                            City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            D'Morvie Suites
                                        </p>
                                        <p class="text-xs text-gray-700">Yacapin Corner Capistrano Streets, Cagayan de
                                            Oro City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            D'Morvie Suites
                                        </p>
                                        <p class="text-xs text-gray-700">Tibanga, Iligan City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            D'Morvie Suites
                                        </p>
                                        <p class="text-xs text-gray-700">C.M. Recto Street, Davao City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            Famous Pension House
                                        </p>
                                        <p class="text-xs text-gray-700">Bry. San Miguel, Iligan City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            Famous Pension House
                                        </p>
                                        <p class="text-xs text-gray-700">Bry. San Miguel, Iligan City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            Flor-Al Mansion
                                        </p>
                                        <p class="text-xs text-gray-700">Wet market, Iligan City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            Flor-Al Mansion
                                        </p>
                                        <p class="text-xs text-gray-700">Cabrera Corner EDSA Avenue, Pasay City</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-md shadow-lg border border-gray-100 overflow-hidden">

                                <div class="flex-1 bg-white bg-opacity-50 p-1 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-xs uppercase font-semibold text-blue-700">
                                            Flor-Al Mansion
                                        </p>
                                        <p class="text-xs text-gray-700">J.C. Aquino Avenue, Brgy. Tandang Sora, Butuan
                                            City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
                            <p class="text-base mb-2 font-medium font-inter text-gray-700">Please sign in to get started.</p>
                            <x-button href="{{route('login')}}" right-icon="login" label="LOGIN" dark />


                        </div>
                    </div>
                    <div
                        class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                        <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden"
                            width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                            <defs>
                                <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0"
                                    width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4"
                                        class="text-blue-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect y="72" width="640" height="640" class="text-blue-500"
                                fill="currentColor" />
                            <rect x="118" width="404" height="784"
                                fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                        </svg>
                        <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                            <button type="button"
                                class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">Watch our video to learn more</span>
                                <img class="w-full opacity-80" src="{{ asset('images/DMorvie.jpeg') }}"
                                    alt="">
                                <span class="absolute inset-0 w-full h-full flex items-center justify-center"
                                    aria-hidden="true">
                                    <svg class="h-20 w-20 text-indigo-500" fill="currentColor" viewBox="0 0 84 84">
                                        <circle opacity="0.9" cx="42" cy="42" r="42"
                                            fill="white" />
                                        <path
                                            d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>

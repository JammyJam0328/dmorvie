<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect"
        href="https://fonts.googleapis.com">
    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet"
        href="{{ mix('css/app.css') }}">

    @livewireStyles
    @wireUiScripts
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"
        defer></script>
</head>

<body class="antialiased text-gray-700 bg-gray-200 font-poppins">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="relative z-40 md:hidden"
            role="dialog"
            aria-modal="true">
            <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

            <div class="fixed inset-0 z-40 flex">
                <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
                <div class="relative flex flex-col flex-1 w-full max-w-xs bg-gray-900">
                    <!--
          Close button, show/hide based on off-canvas menu state.

          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
                    <div class="absolute top-0 right-0 pt-2 -mr-12">
                        <button type="button"
                            class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="w-6 h-6 text-white"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <img class="w-auto h-8"
                                src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg"
                                alt="Workflow">
                        </div>
                        <nav class="px-2 mt-5 space-y-1">
                            <!-- Current: "bg-indigo-800 text-white", Default: "text-white hover:bg-indigo-600 hover:bg-opacity-75" -->
                            <a href="#"
                                class="flex items-center px-2 py-2 text-base font-medium text-white bg-indigo-800 rounded-md group">
                                <!-- Heroicon name: outline/home -->
                                <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                                <!-- Heroicon name: outline/users -->
                                <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Team
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                                <!-- Heroicon name: outline/folder -->
                                <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                </svg>
                                Projects
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                                <!-- Heroicon name: outline/calendar -->
                                <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Calendar
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                                <!-- Heroicon name: outline/inbox -->
                                <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                Documents
                            </a>

                            <a href="#"
                                class="flex items-center px-2 py-2 text-base font-medium text-white rounded-md hover:bg-indigo-600 hover:bg-opacity-75 group">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 w-6 h-6 mr-4 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                Reports
                            </a>
                        </nav>
                    </div>
                    <div class="flex flex-shrink-0 p-4 border-t border-indigo-800">
                        <a href="#"
                            class="flex-shrink-0 block group">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block w-10 h-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-base font-medium text-white">Tom Cook</p>
                                    <p class="text-sm font-medium text-indigo-200 group-hover:text-white">View profile
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14"
                    aria-hidden="true">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <x-super-admin.static-nav />
        <div class="flex flex-col flex-1 md:pl-64">
            <div class="sticky top-0 z-10 pt-1 pl-1 bg-gray-100 md:hidden sm:pl-3 sm:pt-3">
                <button type="button"
                    class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
    </div>
    <x-dialog z-index="z-50"
        blur="md"
        align="center" />
    <x-notifications z-index="z-50" />
    @livewireScripts
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var loading_spinner = document.getElementById('global_spinner');
            var body_tag = document.getElementsByTagName('body')[0];
            Livewire.hook('message.sent', (message, component) => {
                loading_spinner.classList.add('animate-spin');
                body_tag.classList.add('cursor-progress');
            })

            Livewire.hook('message.failed', (message, component) => {
                loading_spinner.classList.remove('animate-spin');
                body_tag.classList.remove('cursor-progress');
            })

            Livewire.hook('message.received', (message, component) => {
                loading_spinner.classList.remove('animate-spin');
                body_tag.classList.remove('cursor-progress');
            })

            Livewire.hook('message.processed', (message, component) => {
                loading_spinner.classList.remove('animate-spin');
                body_tag.classList.remove('cursor-progress');
            })
        });
    </script>
</body>

</html>

<div x-data
    class="py-6 space-y-10">
    <div class="flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <h1 class="text-3xl font-semibold text-gray-700">
            {{ $title }}
        </h1>
        <div class="flex space-x-3">
            <button class="text-gray-600 shadow button-primary">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 "
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                </svg>
            </button>
            <button class="text-gray-600 shadow button-primary">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <button class="text-gray-600 shadow button-primary">
                <svg id="global_spinner"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="w-5 h-5 fill-gray-600">
                    <path fill="none"
                        d="M0 0h24v24H0z" />
                    <path
                        d="M5.463 4.433A9.961 9.961 0 0 1 12 2c5.523 0 10 4.477 10 10 0 2.136-.67 4.116-1.81 5.74L17 12h3A8 8 0 0 0 6.46 6.228l-.997-1.795zm13.074 15.134A9.961 9.961 0 0 1 12 22C6.477 22 2 17.523 2 12c0-2.136.67-4.116 1.81-5.74L7 12H4a8 8 0 0 0 13.54 5.772l.997 1.795z" />
                </svg>
            </button>
        </div>
    </div>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        {{ $slot }}
    </div>
</div>

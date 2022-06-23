<div class="py-6 space-y-10">
    <div class="flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">
            {{ $title }}
        </h1>
        <div class="flex space-x-3">

            <button class="button-primary">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                </svg>
            </button>
            <x-button dark>
                View Profile
            </x-button>
        </div>
    </div>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        {{ $slot }}
    </div>
</div>

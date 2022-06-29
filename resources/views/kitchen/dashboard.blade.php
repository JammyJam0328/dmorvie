<x-layouts.kitchen>
    @section('breadcrumbs')
    <div class="flex justify-between px-2 items-center">
        <h1 class="text-xl font-bold text-gray-500 font-inter uppercase">Dashboard</h1>
        <nav class="flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-1">
                <li>
                    <div>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <!-- Heroicon name: solid/home -->
                            <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            <span class="sr-only">Home</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                        </svg>
                        <a href="#"
                            class=" font-inter text-sm font-semibold text-gray-500 hover:text-gray-700"
                            aria-current="page">Dashboard</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    @endsection
</x-layouts.kitchen>

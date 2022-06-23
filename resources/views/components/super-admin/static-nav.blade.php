<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-1 min-h-0 bg-gray-900">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <div class="w-full p-2 text-2xl font-bold text-center bg-gray-700 rounded-md shadow text-gray-50 ">
                    D'Morvie
                </div>
            </div>
            <nav class="flex-1 mt-10 space-y-1">
                <a href="{{ route('super-admin.dashboard') }}"
                    class="{{ Request::routeIs('super-admin.dashboard') ? 'border-l-8 border-x-white' : '' }} flex items-center px-4 py-2.5 text-sm font-medium text-white hover:bg-gray-800 group">
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 "
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

                <a href="{{ route('super-admin.branches') }}"
                    class="{{ Request::routeIs('super-admin.branches') ? 'border-l-8 border-x-white' : '' }} flex items-center px-4 py-2.5 text-sm font-medium text-white hover:bg-gray-800 group">
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 "
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
                    Branch
                </a>

                <a href="{{ route('super-admin.users') }}"
                    class="{{ Request::routeIs('super-admin.users') ? 'border-l-8 border-x-white' : '' }} flex items-center px-4 py-2.5 text-sm font-medium text-white hover:bg-gray-800 group">
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 "
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
                    Users
                </a>

                <a href="{{ route('super-admin.reports') }}"
                    class="{{ Request::routeIs('super-admin.reports') ? 'border-l-8 border-x-white' : '' }} flex items-center px-4 py-2.5 text-sm font-medium text-white hover:bg-gray-800 group">
                    <svg class="flex-shrink-0 w-6 h-6 mr-3 "
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

    </div>
</div>

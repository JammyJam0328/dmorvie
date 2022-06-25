<div class="hidden p-2 md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-1 min-h-0 bg-gray-800 shadow-2xl rounded-xl">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4 mt-2">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <a href="{{ route('profile.show') }}"
                    class="flex-shrink-0 block group">
                    <div class="flex items-center">
                        <div class="p-1 bg-gray-300 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1"
                                class="h-10"
                                viewBox="0 0 68 68">
                                <ellipse cx="19.36"
                                    cy="23.67"
                                    fill="#e8c59e"
                                    rx="2.33"
                                    ry="3.93" />
                                <ellipse cx="48.22"
                                    cy="23.67"
                                    fill="#e8c59e"
                                    rx="2.33"
                                    ry="3.93" />
                                <path fill="#f2f2f2"
                                    d="M41.58,43.18a42.75,42.75,0,0,1,10.17,2,12.75,12.75,0,0,1,8.57,12V66H7.68V57.23a12.75,12.75,0,0,1,8.57-12,42.75,42.75,0,0,1,10.17-2" />
                                <polygon fill="#dbb997"
                                    points="28.14 36.87 34.02 39.24 39.9 36.87 40.95 40.72 34.02 45.52 27.09 40.72 28.14 36.87" />
                                <path fill="#e8c59e"
                                    d="M48.66,21.19c0,6.64-3.23,14.08-8,18a10.79,10.79,0,0,1-6.88,2.72A10.8,10.8,0,0,1,27,39.22c-4.79-3.87-8.06-11.35-8.06-18,0-.5,0-1,0-1.47a20.48,20.48,0,0,1,17.81-5.91c5.13.68,8.26.38,10.17-.2A16.58,16.58,0,0,1,48.66,21.19Z" />
                                <polygon fill="#333"
                                    points="35.19 49.82 32.81 49.82 29.78 45.52 38.22 45.52 35.19 49.82" />
                                <polygon fill="#4d4d4d"
                                    points="32.81 49.82 35.19 49.82 36.69 63.66 34 66 31.31 63.66 32.81 49.82" />
                                <polygon fill="#e6e6e6"
                                    points="27.09 40.72 27.47 40.98 34.02 45.52 29.66 50.89 25.3 43.29 27.09 40.72" />
                                <polygon fill="#e6e6e6"
                                    points="40.95 40.72 40.57 40.98 34.02 45.52 38.38 50.89 42.73 43.29 40.95 40.72" />
                                <path fill="#2f3233"
                                    d="M18.63,25.17H19.7c-.34-2.87-.34-3.8.61-5.43,0,0,8.5,1.18,14.11.41A55.82,55.82,0,0,0,46.19,17c.9,1.83,1,4.31.83,8.15l1.73.34A50.86,50.86,0,0,0,49,12.77c-.44-2.44-.75-6.95-8.89-10a10.93,10.93,0,0,0-1.86-.52C30.74,1,16.21,4.32,16.57,16.84h0A12.22,12.22,0,0,0,18.63,25.17Z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="font-medium text-md text-gray-50 ">{{ auth()->user()->name }}</p>
                            <p class="text-xs font-medium text-gray-50 ">View profile</p>
                        </div>
                    </div>
                </a>

            </div>
            <nav class="flex-1 px-2 mt-10 space-y-1">
                <a href="{{ route('super-admin.dashboard') }}"
                    class="{{ Request::routeIs('super-admin.dashboard') ? 'bg-gray-600 text-white ' : 'hover:bg-gray-700 text-gray-400' }} rounded-xl flex items-center px-4 py-2.5 text-md font-medium   group focus:outline-none">
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
                    class="{{ Request::routeIs('super-admin.branches') ? 'bg-gray-600 text-white ' : 'hover:bg-gray-700 text-gray-400' }} rounded-xl flex items-center px-4 py-2.5 text-md font-medium   group focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 w-6 h-6 mr-3 "
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>

                    Branch
                </a>

                <a href="{{ route('super-admin.users') }}"
                    class="{{ Request::routeIs('super-admin.users') ? 'bg-gray-600 text-white ' : 'hover:bg-gray-700 text-gray-400' }} rounded-xl flex items-center px-4 py-2.5 text-md font-medium   group focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 w-6 h-6 mr-3 "
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Users
                </a>

                <a href="{{ route('super-admin.reports') }}"
                    class="{{ Request::routeIs('super-admin.reports') ? 'bg-gray-600 text-white ' : 'hover:bg-gray-700 text-gray-400' }} rounded-xl flex items-center px-4 py-2.5 text-md font-medium   group focus:outline-none">
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

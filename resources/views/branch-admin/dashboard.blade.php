<x-layouts.branch-admin>
    <div class="py-6">
        <div class="flex items-center justify-between px-4 mx-auto space-x-3 max-w-7xl sm:px-6 md:px-8">
            <div class="flex space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="h-10 fill-black">
                    <path fill="none"
                        d="M0 0h24v24H0z" />
                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                </svg>
                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
            </div>
            <x-branch.user-menu />
        </div>
        <div class="px-4 mx-auto mt-10 space-y-10 max-w-7xl sm:px-6 md:px-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    Hello {{ auth()->user()->name }}
                </h1>
                <p class="text-gray-600">
                    You are logged in!
                </p>
            </div>
            <div>
                <ul role="list"
                    class="grid grid-cols-1 gap-6 px-10 py-5 bg-white border border-gray-300 rounded-xl sm:grid-cols-2 lg:grid-cols-4">
                    <li class="col-span-1 space-y-4 rounded-lg ">
                        <div class="flex">
                            <div class="p-3 bg-black rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="h-10 fill-default-x">
                                    <path fill="none"
                                        d="M0 0H24V24H0z" />
                                    <path
                                        d="M2 21v-2h2V4.835c0-.484.346-.898.821-.984l9.472-1.722c.326-.06.638.157.697.483.007.035.01.07.01.107v1.28L19 4c.552 0 1 .448 1 1v14h2v2h-4V6h-3v15H2zm10-10h-2v2h2v-2z" />
                                </svg>
                            </div>
                        </div>
                        <h1 class="text-gray-500">
                            Available Rooms
                        </h1>
                        <h1 class="text-4xl font-bold">
                            100
                        </h1>
                    </li>
                    <li class="col-span-1 space-y-4 rounded-lg ">
                        <div class="flex">
                            <div class="p-3 bg-black rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="h-10 fill-default-x">
                                    <path fill="none"
                                        d="M0 0H24V24H0z" />
                                    <path
                                        d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
                                </svg>

                            </div>
                        </div>
                        <h1 class="text-gray-500">
                            Occupied Rooms
                        </h1>
                        <h1 class="text-4xl font-bold">
                            100
                        </h1>
                    </li>
                    <li class="col-span-1 space-y-4 rounded-lg ">
                        <div class="flex">
                            <div class="p-3 bg-black rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="h-10 fill-default-x">
                                    <path fill="none"
                                        d="M0 0H24V24H0z" />
                                    <path
                                        d="M6.929.515L21.07 14.657l-1.414 1.414-3.823-3.822L14 15v7h-4v-7L4 6H3V4h4.585l-2.07-2.071L6.929.515zM21 4v2h-1l-1.915 2.872L13.213 4H21z" />
                                </svg>
                            </div>
                        </div>
                        <h1 class="text-gray-500">
                            Unclean Rooms
                        </h1>
                        <h1 class="text-4xl font-bold">
                            100
                        </h1>
                    </li>
                    <li class="col-span-1 space-y-4 rounded-lg ">
                        <div class="flex">
                            <div class="p-3 bg-black rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="h-10 fill-default-x">
                                    <path fill="none"
                                        d="M0 0h24v24H0z" />
                                    <path
                                        d="M17 8V2h3a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1h-3zm-2 14a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V8H2.5V6.074a1 1 0 0 1 .496-.863L8.5 2H15v20z" />
                                </svg>
                            </div>
                        </div>
                        <h1 class="text-gray-500">
                            Unavailable Rooms
                        </h1>
                        <h1 class="text-4xl font-bold">
                            100
                        </h1>
                    </li>
                </ul>

            </div>
            <div>
                <div class="space-y-5">
                    <h1 class="text-xl text-gray-900">
                        Users Activity Logs
                    </h1>
                    <div>
                        <div class="flex flex-col ">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden md:rounded-xl">
                                        <table class="min-w-full border border-gray-300 divide-y divide-gray-300">
                                            <tbody class="bg-white divide-y divide-gray-100">
                                                <tr class="hover:bg-gray-200">
                                                    <td
                                                        class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                                        Lindsay Walton</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        Front-end Developer</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        lindsay.walton@example.com</td>
                                                </tr>
                                                <tr class="hover:bg-gray-200">
                                                    <td
                                                        class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                                        Lindsay Walton</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        Front-end Developer</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        lindsay.walton@example.com</td>
                                                </tr>
                                                <tr class="hover:bg-gray-200">
                                                    <td
                                                        class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                                        Lindsay Walton</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        Front-end Developer</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        lindsay.walton@example.com</td>
                                                </tr>
                                                <tr class="hover:bg-gray-200">
                                                    <td
                                                        class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                                        Lindsay Walton</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        Front-end Developer</td>
                                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        lindsay.walton@example.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</x-layouts.branch-admin>

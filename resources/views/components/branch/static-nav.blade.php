            <div class="flex flex-col flex-1 min-h-0 bg-white border-r border-gray-300">
                <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <div class="flex items-center space-x-2 ">
                            <div class="p-2 bg-white rounded-xl">
                                <img src="{{ asset('images/dmorvielogo.png') }}"
                                    class="h-14"
                                    alt="..">
                            </div>
                            <div class="text-gray-900">
                                <h1 class="text-xl">D'Morvie</h1>
                                <h1>Suites</h1>
                            </div>
                        </div>
                    </div>
                    <nav class="flex-1 px-2 mt-10 space-y-1">
                        <x-branch.nav-link route="{{ route('branch-admin.dashboard') }}"
                            title="Dashboard"
                            active="{{ Request::routeIs('branch-admin.dashboard') }}">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="w-6 h-6  {{ Request::routeIs('branch-admin.dashboard') ? 'fill-gray-50' : 'fill-gray-800' }}">
                                    >
                                    <path fill="none"
                                        d="M0 0h24v24H0z" />
                                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                                </svg>
                            </x-slot>
                        </x-branch.nav-link>
                        <x-branch.nav-link route="{{ route('branch-admin.inhouse') }}"
                            title="Inhouse"
                            active="{{ Request::routeIs('branch-admin.inhouse') }}">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="w-6 h-6 {{ Request::routeIs('branch-admin.inhouse') ? 'fill-gray-50' : 'fill-gray-800' }}">
                                    <path fill="none"
                                        d="M0 0h24v24H0z" />
                                    <path
                                        d="M4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm2.988 11.065c-.06.267-.09.555-.09.79 0 .927.482 1.542 1.508 1.542.851 0 1.541-.526 2.038-1.375l-.303 1.267h1.69l.966-4.031c.241-1.02.71-1.55 1.419-1.55.558 0 .905.36.905.957 0 .173-.015.361-.075.565l-.498 1.853a2.89 2.89 0 0 0-.106.785c0 .88.498 1.523 1.54 1.523.89 0 1.6-.596 1.992-2.025l-.664-.267c-.332.958-.62 1.13-.846 1.13-.226 0-.347-.156-.347-.47 0-.141.03-.298.076-.487l.483-1.805c.12-.424.166-.8.166-1.145 0-1.35-.785-2.055-1.736-2.055-.89 0-1.796.835-2.248 1.715l.331-1.579h-2.58l-.363 1.39h1.208l-.744 3.098c-.583 1.35-1.656 1.372-1.79 1.34-.222-.051-.363-.139-.363-.438 0-.172.03-.42.106-.718l1.132-4.672H6.927l-.362 1.39h1.192l-.77 3.272zm1.637-5.44a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25z" />
                                </svg>

                            </x-slot>
                        </x-branch.nav-link>
                        <x-branch.nav-link route="{{ route('branch-admin.rooms') }}"
                            title="Rooms"
                            active="{{ Request::routeIs('branch-admin.rooms') }}">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="w-6 h-6 {{ Request::routeIs('branch-admin.rooms') ? 'fill-gray-50' : 'fill-gray-800' }}">
                                    <path fill="none"
                                        d="M0 0H24V24H0z" />
                                    <path
                                        d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
                                </svg>
                            </x-slot>
                        </x-branch.nav-link>
                        <x-branch.nav-link route="{{ route('branch-admin.rates') }}"
                            title="Rates"
                            active="{{ Request::routeIs('branch-admin.rates') }}">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="w-6 h-6 {{ Request::routeIs('branch-admin.rates') ? 'fill-gray-50' : 'fill-gray-800' }}">
                                    <path fill="none"
                                        d="M0 0h24v24H0z" />
                                    <path
                                        d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm5.5 11v2H11v2h2v-2h1a2.5 2.5 0 1 0 0-5h-4a.5.5 0 1 1 0-1h5.5V8H13V6h-2v2h-1a2.5 2.5 0 0 0 0 5h4a.5.5 0 1 1 0 1H8.5z" />
                                </svg>
                            </x-slot>
                        </x-branch.nav-link>
                        <x-branch.nav-link route="{{ route('branch-admin.users') }}"
                            title="Users"
                            active="{{ Request::routeIs('branch-admin.users') }}">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 {{ Request::routeIs('branch-admin.users') ? 'text-gray-50' : 'text-gray-800' }}"
                                    viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                </svg>
                            </x-slot>
                        </x-branch.nav-link>
                    </nav>
                </div>
            </div>

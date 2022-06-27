<div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
    <div class="flex items-center flex-shrink-0 px-4">
        <div class="flex items-center space-x-2 ">
            <div class="p-2 bg-white rounded-xl">
                <img src="{{ asset('images/dmorvielogo.png') }}"
                    class="h-14"
                    alt="..">
            </div>
            <div class="text-white">
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
                    class="w-6 h-6  {{ Request::routeIs('branch-admin.dashboard') ? 'fill-black' : 'fill-white' }}">
                    >
                    <path fill="none"
                        d="M0 0h24v24H0z" />
                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                </svg>
            </x-slot>
        </x-branch.nav-link>
        <x-branch.nav-link route="{{ route('branch-admin.checkin') }}"
            title="Check-ins"
            active="{{ Request::routeIs('branch-admin.checkin') }}">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="w-6 h-6 {{ Request::routeIs('branch-admin.checkin') ? 'fill-black' : 'fill-white' }}">
                    <path fill="none"
                        d="M0 0h24v24H0z" />
                    <path
                        d="M9 1v2h6V1h2v2h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2zm11 7H4v11h16V8zm-4.964 2.136l1.414 1.414-4.95 4.95-3.536-3.536L9.38 11.55l2.121 2.122 3.536-3.536z" />
                </svg>
            </x-slot>
        </x-branch.nav-link>
        <x-branch.nav-link route="{{ route('branch-admin.rooms') }}"
            title="Rooms"
            active="{{ Request::routeIs('branch-admin.rooms') }}">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="w-6 h-6 {{ Request::routeIs('branch-admin.rooms') ? 'fill-black' : 'fill-white' }}">
                    <path fill="none"
                        d="M0 0H24V24H0z" />
                    <path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
                </svg>
            </x-slot>
        </x-branch.nav-link>
        <x-branch.nav-link route="{{ route('branch-admin.rates') }}"
            title="Rates"
            active="{{ Request::routeIs('branch-admin.rates') }}">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="w-6 h-6 {{ Request::routeIs('branch-admin.rates') ? 'fill-black' : 'fill-white' }}">
                    <path fill="none"
                        d="M0 0h24v24H0z" />
                    <path
                        d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm5.5 11v2H11v2h2v-2h1a2.5 2.5 0 1 0 0-5h-4a.5.5 0 1 1 0-1h5.5V8H13V6h-2v2h-1a2.5 2.5 0 0 0 0 5h4a.5.5 0 1 1 0 1H8.5z" />
                </svg>
            </x-slot>
        </x-branch.nav-link>
    </nav>
</div>

<x-layouts.super-admin>
    <x-super-admin.main title="Dashboard">
        <div class="grid grid-cols-1 gap-5 mt-2 sm:grid-cols-3 lg:grid-cols-4">
            <x-super-admin.card title="Total Branches"
                count="14">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                            clip-rule="evenodd" />
                    </svg>
                </x-slot>
            </x-super-admin.card>
            <x-super-admin.card title="Total Users"
                count="14">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                </x-slot>
            </x-super-admin.card>
        </div>
    </x-super-admin.main>
</x-layouts.super-admin>

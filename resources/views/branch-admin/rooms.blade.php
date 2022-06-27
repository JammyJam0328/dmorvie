<x-layouts.branch-admin>
    <div x-data
        class="py-6">
        <div class="flex items-center px-4 mx-auto space-x-3 max-w-7xl sm:px-6 md:px-8">
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                class="h-10 fill-black">
                <path fill="none"
                    d="M0 0H24V24H0z" />
                <path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
            </svg>
            <h1 class="text-2xl font-semibold text-gray-900">Rooms</h1>
        </div>
        <div class="px-4 mx-auto mt-10 max-w-7xl sm:px-6 md:px-8">
            <livewire:branch-admin.rooms.table />
            <livewire:branch-admin.rooms.create :floors="$floors"
                :statuses="$statuses" />
            <livewire:branch-admin.rooms.edit :floors="$floors"
                :statuses="$statuses" />
        </div>
    </div>
</x-layouts.branch-admin>

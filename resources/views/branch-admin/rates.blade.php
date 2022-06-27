<x-layouts.branch-admin>
    <div x-data
        class="py-6">
        <div class="flex items-center px-4 mx-auto space-x-3 max-w-7xl sm:px-6 md:px-8">
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                class="h-10 fill-black">
                <path fill="none"
                    d="M0 0h24v24H0z" />
                <path
                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-3.5-8v2H11v2h2v-2h1a2.5 2.5 0 1 0 0-5h-4a.5.5 0 1 1 0-1h5.5V8H13V6h-2v2h-1a2.5 2.5 0 0 0 0 5h4a.5.5 0 1 1 0 1H8.5z" />
            </svg>
            <h1 class="text-2xl font-semibold text-gray-900">Rates</h1>
        </div>
        <div class="px-4 mx-auto mt-10 space-y-10 max-w-7xl sm:px-6 md:px-8">
            <livewire:branch-admin.rates.table />
            <livewire:branch-admin.rates.create :types="$types" />
            <livewire:branch-admin.rates.edit :types="$types" />
        </div>
    </div>
</x-layouts.branch-admin>

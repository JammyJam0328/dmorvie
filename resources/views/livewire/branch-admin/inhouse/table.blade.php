<div>
    <div class="flex items-end justify-between ">
        <div>
            <input type="text"
                placeholder="Search"
                wire:model.debounce.500ms="search"
                class="py-1.5 px-3 rounded-md border border-gray-300 focus:outline-none focus:border-gray-300 focus:ring-gray-300"
                name="search"
                id="search">
        </div>
    </div>
    <div>
        <div class="mt-10">
            <x-table.main>
                <x-slot name="heading">
                    <x-table.heading>
                        <x-table.head label="QR Code" />
                        <x-table.head label="Customer Name" />
                        <x-table.head label="Room" />
                        <x-table.head label="Check In Date" />
                        <x-table.head />
                    </x-table.heading>
                </x-slot>
                <x-slot name="body">
                    <x-table.body>
                        @forelse ($customers as $customer)
                            <x-table.row>
                                <x-table.data>
                                    {{ $customer->qr_code }}
                                </x-table.data>
                                <x-table.data>
                                    {{ $customer->name }}
                                </x-table.data>
                                <x-table.data>
                                    {{ $customer->check_in_time }}
                                </x-table.data>
                                <x-table.data>
                                    <div class="flex items-center justify-end space-x-2">
                                        <x-button.circle sm
                                            wire:click="invoke_action({{ $customer->id }})"
                                            flat
                                            icon="dots-horizontal"></x-button.circle>
                                    </div>
                                </x-table.data>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.data colspan="5">
                                    <h1 class="text-center"> No rates found.</h1>
                                </x-table.data>
                            </x-table.row>
                        @endforelse
                    </x-table.body>
                </x-slot>
                <x-slot name="pagintation">
                    {{ $customers->links() }}
                </x-slot>
            </x-table.main>
        </div>
    </div>
    {{-- <div id="action_modal">
        <x-modal max-width="sm"
            blur="lg"
            wire:model.defer="action_modal">
            <div class="grid p-5 space-y-3 bg-white rounded-lg">
                <x-button wire:click="edit_action">
                    Edit Branch
                </x-button>
                <x-button wire:click="delete_action">
                    Delete Branch
                </x-button>
            </div>
        </x-modal>
    </div> --}}
</div>

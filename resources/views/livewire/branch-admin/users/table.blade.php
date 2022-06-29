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
        <div class="flex space-x-2">
            <x-button black
                x-on:click="$dispatch('create-user')"
                md
                icon="plus">
                Add user
            </x-button>
        </div>
    </div>
    <div>
        <div class="mt-10">
            <x-table.main>
                <x-slot name="heading">
                    <x-table.heading>
                        <x-table.head label="Name" />
                        <x-table.head label="Email" />
                        <x-table.head label="Role" />
                        <x-table.head />
                    </x-table.heading>
                </x-slot>
                <x-slot name="body">
                    <x-table.body>
                        @forelse ($users as $user)
                            <x-table.row>
                                <x-table.data>
                                    {{ $user->name }}
                                </x-table.data>
                                <x-table.data>
                                    {{ $user->email }}
                                </x-table.data>
                                <x-table.data>
                                    {{ $user->role->name }}
                                </x-table.data>
                                <x-table.data>
                                    <div class="flex items-center justify-end space-x-2">
                                        <x-button.circle sm
                                            wire:click="invoke_action({{ $user->id }})"
                                            flat
                                            icon="dots-horizontal"></x-button.circle>
                                    </div>
                                </x-table.data>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.data colspan="4">
                                    <h1 class="text-center"> No rates found.</h1>
                                </x-table.data>
                            </x-table.row>
                        @endforelse
                    </x-table.body>
                </x-slot>
                <x-slot name="pagintation">
                    {{ $users->links() }}
                </x-slot>
            </x-table.main>
        </div>
    </div>
    <div id="action_modal">
        <x-modal max-width="sm"
            blur="lg"
            wire:model.defer="action_modal">
            <div class="grid p-5 space-y-3 bg-white rounded-lg">
                <x-button wire:click="edit_action">
                    Edit
                </x-button>
                <hr>
                <x-button wire:click="delete_action"
                    negative>
                    Delete
                </x-button>
            </div>
        </x-modal>
    </div>
</div>

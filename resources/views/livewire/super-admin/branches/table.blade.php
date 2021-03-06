<div>
    <div>
        <x-shared.t-controls>
            <x-slot name="left">
                <x-input wire:model.debounce.500ms="search"
                    label="Search"
                    class="py-[8.5px]"
                    id="search"
                    placeholder="Search"
                    name="search" />
            </x-slot>
            <x-slot name="right">
                <x-button dark
                    md
                    icon="plus"
                    x-on:click="$dispatch('create-branch')"
                    class="!rounded-xl shadow"
                    label="Add branch"></x-button>
            </x-slot>
        </x-shared.t-controls>
        <x-shared.table>
            <x-shared.theading>
                <x-shared.thead label="Name" />
                <x-shared.thead label="Address" />
                <x-shared.thead label="Cellphone" />
                <x-shared.thead label="Telephone" />
                <x-shared.thead label="" />
            </x-shared.theading>
            <x-shared.tbody>
                @forelse ($branches as $branch)
                    <x-shared.trow>
                        <x-shared.tdata>
                            {{ $branch->name }}
                        </x-shared.tdata>
                        <x-shared.tdata>
                            {{ $branch->address }}
                        </x-shared.tdata>
                        <x-shared.tdata>
                            {{ $branch->cellphone }}
                        </x-shared.tdata>
                        <x-shared.tdata>
                            {{ $branch->telephone }}
                        </x-shared.tdata>

                        <x-shared.tdata action>
                            <x-button.circle icon="dots-horizontal"
                                wire:click="invoke_action({{ $branch->id }})"
                                flat />
                        </x-shared.tdata>
                    </x-shared.trow>
                @empty
                    <x-shared.trow>
                        <x-shared.tdata colspan="6"
                            class="py-3 text-center text-gray-500">No data</x-shared.tdata>
                    </x-shared.trow>
                @endforelse
            </x-shared.tbody>
            <x-slot name="pagination">
                {{ $branches->links() }}
            </x-slot>
        </x-shared.table>
    </div>
    <div id="action_modal">
        <x-modal max-width="sm"
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
    </div>
</div>

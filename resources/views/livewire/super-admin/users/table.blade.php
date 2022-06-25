<div>
    <div>
        <x-shared.t-controls>
            <x-slot name="left">
                <x-input wire:model.debounce.500ms="search"
                    label="Search"
                    id="search"
                    icon="search"
                    name="search" />
                <x-native-select label="Filter by branch"
                    class="py-[8.5px]"
                    wire:model="branchFilter">
                    <option value="">ALL</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </x-native-select>
            </x-slot>
            <x-slot name="right">
                <x-button dark
                    md
                    icon="plus"
                    x-on:click="$dispatch('create-user')"
                    class="!rounded-xl shadow"
                    label="Add user"></x-button>
            </x-slot>
        </x-shared.t-controls>
        <x-shared.table>
            <x-shared.theading>
                <x-shared.thead label="Name" />
                <x-shared.thead label="Email" />
                <x-shared.thead label="Role" />
                <x-shared.thead label="" />
            </x-shared.theading>
            <x-shared.tbody>
                @forelse ($users as $user)
                    <x-shared.trow>
                        <x-shared.tdata>
                            {{ $user->name }}
                        </x-shared.tdata>
                        <x-shared.tdata>
                            {{ $user->email }}
                        </x-shared.tdata>
                        <x-shared.tdata>
                            {{ $user->role->name }}
                        </x-shared.tdata>
                        <x-shared.tdata action>
                            <x-button.circle icon="dots-horizontal"
                                wire:click="invoke_action({{ $user->id }})"
                                flat />
                        </x-shared.tdata>
                    </x-shared.trow>
                @empty
                    <x-shared.trow>
                        <x-shared.tdata colspan="4"
                            class="text-center text-gray-500">No data</x-shared.tdata>
                    </x-shared.trow>
                @endforelse
            </x-shared.tbody>
            <x-slot name="pagination">
                {{ $users->links() }}
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

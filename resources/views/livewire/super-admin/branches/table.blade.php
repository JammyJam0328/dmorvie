<div>
    <div>
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <input wire:model.debounce.500ms="search"
                    class="input-primary placeholder:text-gray-500"
                    id="search"
                    placeholder="Search"
                    name="search" />
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <x-button secondary
                    x-on:click="$dispatch('create-branch')"
                    class="!rounded-lg"
                    label="Create"></x-button>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left uppercase text-sm font-semibold  sm:pl-6">
                                        Name</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left uppercase text-sm font-semibold ">
                                        Address
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left uppercase text-sm font-semibold ">
                                        Phone
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left uppercase text-sm font-semibold ">
                                        Email
                                    </th>
                                    <th scope="col"
                                        class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse ($branches as $branch)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{ $branch->name }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $branch->address }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $branch->phone }}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $branch->email }}
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex space-x-2 justify-end">
                                                <x-button wire:click="invoke_action({{ $branch->id }})">
                                                    Action
                                                </x-button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="text-center text-gray-500 py-3">No data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-5">
                        {{ $branches->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="action_modal">
        <x-modal wire:model.defer="action_modal"
            max-width="sm">
            <div class="p-5 rounded-lg bg-white space-y-3 grid">
                <x-button>
                    Edit Branch
                </x-button>
                <x-button>
                    Delete Branch
                </x-button>
            </div>
        </x-modal>
    </div>
</div>

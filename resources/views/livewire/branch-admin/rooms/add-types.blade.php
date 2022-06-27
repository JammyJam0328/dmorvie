<div id="add_type">
    <x-modal.card wire:model.defer="add_types_modal"
        title="Add Types">
        <form>
            @csrf
            <x-native-select label="Select applicable types for this room"
                wire:model="selected_type_id">
                <option value=""></option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </x-native-select>
        </form>
        <div class="mt-5">
            <ul role="list"
                class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-2">
                @forelse ($roomTypes as $key=>$roomType)
                    <li wire:key="s-{{ $key }}"
                        class="col-span-1 flex shadow-sm rounded-md">
                        <div
                            class="flex-shrink-0 flex items-center justify-center w-16 bg-gray-600 text-white text-sm font-medium rounded-l-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                class="h-8 fill-white">
                                <path fill="none"
                                    d="M0 0h24v24H0z" />
                                <path
                                    d="M20.083 10.5l1.202.721a.5.5 0 0 1 0 .858L12 17.65l-9.285-5.571a.5.5 0 0 1 0-.858l1.202-.721L12 15.35l8.083-4.85zm0 4.7l1.202.721a.5.5 0 0 1 0 .858l-8.77 5.262a1 1 0 0 1-1.03 0l-8.77-5.262a.5.5 0 0 1 0-.858l1.202-.721L12 20.05l8.083-4.85zM12.514 1.309l8.771 5.262a.5.5 0 0 1 0 .858L12 13 2.715 7.429a.5.5 0 0 1 0-.858l8.77-5.262a1 1 0 0 1 1.03 0z" />
                            </svg>
                        </div>
                        <div
                            class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                            <div class="flex-1 px-4 py-2 text-sm truncate">
                                <a href="#"
                                    class="text-gray-900 font-medium hover:text-gray-600">
                                    {{ $roomType->type?->name }}
                                </a>
                            </div>
                            <div class="flex-shrink-0 pr-2 py-2">
                                <x-button.circle flat
                                    wire:click="removeType({{ $roomType->id }})">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </x-button.circle>
                            </div>
                        </div>
                    </li>
                @empty
                    <span>
                        No types found
                    </span>
                @endforelse
            </ul>
        </div>

    </x-modal.card>
</div>

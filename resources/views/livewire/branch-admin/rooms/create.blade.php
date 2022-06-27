<div id="create_room"
    x-on:create-room.window="$wire.set('create_room_modal',true)">
    <x-modal.card wire:model.defer="create_room_modal"
        title="Create Room">
        <form>
            @csrf
            <div id="form-fields"
                class="space-y-3">
                <x-input wire:model.defer="number"
                    label="Number" />
                <x-native-select label="Select Floor"
                    wire:model="floor_id">
                    <option value=""></option>
                    @foreach ($floors as $floor)
                        <option value="{{ $floor->id }}">{{ $floor->number }}</option>
                    @endforeach
                </x-native-select>
                <x-native-select label="Select Status"
                    wire:model="status_id">
                    <option value=""></option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                </x-native-select>
            </div>
        </form>
        <x-slot name="footer">
            <x-button wire:click="submitHandler"
                md
                spinner="submitHandler"
                dark
                label="Submit"></x-button>
        </x-slot>
    </x-modal.card>
</div>

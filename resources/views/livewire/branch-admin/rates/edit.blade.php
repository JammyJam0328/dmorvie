<div id="edit_rate"
    x-on:edit-rate.window="$wire.set('edit_rate_modal',true)">
    <x-modal.card wire:model.defer="edit_rate_modal"
        title="Edit Rate">
        <form>
            @csrf
            <div id="form-fields"
                class="space-y-3">
                <x-input wire:model.defer="price"
                    label="Price" />
                <x-input wire:model.defer="hours"
                    type="number"
                    suffix="hours"
                    label="Hours"
                    placeholder="ex.6" />
                <x-native-select label="Select Type"
                    wire:model.defer="type_id">
                    <option value=""></option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </x-native-select>
                <x-textarea wire:model.defer="description"
                    label="Description" />
            </div>
        </form>
        <x-slot name="footer">
            <x-button wire:click="submitHandler"
                md
                spinner="submitHandler"
                black
                label="Submit"></x-button>
        </x-slot>
    </x-modal.card>
</div>

<div id="create_branch"
    x-on:create-branch.window="$wire.set('create_branch_modal',true)">
    <x-modal.card wire:model.defer="create_branch_modal"
        title="Create Branch">
        <form>
            @csrf
            <div id="form-fields"
                class="space-y-3">
                <x-input wire:model.defer="name"
                    label="Name" />
                <x-input wire:model.defer="address"
                    label="Address" />
                <x-input type="number"
                    wire:model.defer="phone"
                    label="Phone" />
                <x-input type="email"
                    wire:model.defer="email"
                    label="Email" />
            </div>
        </form>
        <x-slot name="footer">
            <x-button wire:click="submitHandler"
                spinner="submitHandler"
                class="!rounded-lg"
                secondary
                label="Submit"></x-button>
        </x-slot>
    </x-modal.card>
</div>

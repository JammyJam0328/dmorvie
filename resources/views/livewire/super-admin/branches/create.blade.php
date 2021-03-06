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
                    wire:model.defer="telephone"
                    label="Telephone" />
                <x-input type="number"
                    wire:model.defer="cellphone"
                    label="Cellphone" />
                <x-input type="email"
                    wire:model.defer="email"
                    label="Email" />
            </div>
        </form>
        <x-slot name="footer">
            <x-button wire:click="submitHandler"
                md
                spinner="submitHandler"
                class="!rounded-xl"
                secondary
                label="Submit"></x-button>
        </x-slot>
    </x-modal.card>
</div>

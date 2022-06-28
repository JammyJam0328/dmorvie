<div id="create_user"
    x-on:create-user.window="$wire.set('create_user_modal',true)">
    <x-modal.card wire:model.defer="create_user_modal"
        title="Create User">
        <form>
            @csrf
            <div id="form-fields"
                class="space-y-3">
                <x-input wire:model.defer="name"
                    label="Name" />
                <x-input wire:model.defer="email"
                    type="email"
                    label="Email" />
                <x-input wire:model.defer="password"
                    type="password"
                    label="Password" />
                <x-native-select label="Select Role"
                    wire:model="role_id">
                    <option value=""></option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">
                            {{ $role->name }}
                        </option>
                    @endforeach
                </x-native-select>
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

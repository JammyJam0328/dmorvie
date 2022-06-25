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
                    label="Email" />
                <x-input type="password"
                    wire:model.defer="password"
                    label="Password" />
                <x-native-select label="Select Role"
                    wire:model="role_id">
                    <option value=""></option>
                    @foreach ($roles as $roles)
                        <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                    @endforeach
                </x-native-select>
                <div>
                    @if ($role_id != 1)
                        <x-native-select label="Select Branch"
                            wire:model.defer="branch_id">
                            <option value=""></option>
                            @foreach ($branches as $branches)
                                <option value="{{ $branches->id }}">{{ $branches->name }}</option>
                            @endforeach
                        </x-native-select>
                    @endif
                </div>
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

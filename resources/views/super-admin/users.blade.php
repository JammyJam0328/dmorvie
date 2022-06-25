<x-layouts.super-admin>
    <x-super-admin.main title="Users">
        <livewire:super-admin.users.table :branches="$branches" />
        <livewire:super-admin.users.create :roles="$roles"
            :branches="$branches" />
        <livewire:super-admin.users.edit :roles="$roles"
            :branches="$branches" />
    </x-super-admin.main>
</x-layouts.super-admin>

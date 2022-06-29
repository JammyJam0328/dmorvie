<div class="flex space-x-3">
    <x-button href="{{ route('profile.show') }}"
        black
        icon="user">
        PROFILE
    </x-button>
    <form method="POST"
        action="{{ route('logout') }}"
        x-data>
        @csrf
        <x-button href="{{ route('logout') }}"
            @click.prevent="$root.submit();"
            white
            icon="logout">
            LOG OUT
        </x-button>
    </form>
</div>

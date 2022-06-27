@props(['route', 'active', 'title'])
<a href="{{ $route }}"
    class="{{ $active ? 'shadow-lg bg-white text-black ' : 'hover:bg-gray-400 hover:bg-opacity-75' }} flex items-center px-2 py-2 text-sm font-medium text-white rounded-md   group">
    <div class="flex items-center space-x-2">
        {{ $icon }}
        <span>{{ $title }}</span>
    </div>
</a>

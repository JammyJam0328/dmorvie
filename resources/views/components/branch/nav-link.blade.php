@props(['route', 'active', 'title'])
<a href="{{ $route }}"
    class="{{ $active ? 'shadow-lg bg-black text-white ' : 'hover:bg-gray-200 hover:bg-opacity-75' }} flex items-center px-2 py-2 text-sm font-medium text-gray-500 rounded-md   group">
    <div class="flex items-center space-x-2">
        {{ $icon }}
        <span>{{ $title }}</span>
    </div>
</a>

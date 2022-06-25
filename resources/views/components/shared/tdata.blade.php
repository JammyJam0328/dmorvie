@php
$isAction = $attributes->has('action');
@endphp
<td {{ $attributes->whereStartsWith('colspan') }}
    {{ $attributes->merge(['class' => 'py-3 pl-2  text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-3']) }}>
    @if ($isAction)
        <div class="flex justify-center space-x-2">
            {{ $slot }}
        </div>
    @else
        {{ $slot }}
    @endif
</td>

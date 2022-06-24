@props(['title', 'count'])
<div class="bg-white overflow-hidden shadow-gray-200 shadow border rounded-lg">
    <div class="p-5">
        <div class="grid space-y-2">
            <div class="flex">
                <div class="p-2 rounded-lg bg-gray-600 text-white ">
                    {{ $icon }}
                </div>
            </div>
            <div class="space-y-2 ">
                <h1>
                    {{ $title }}
                </h1>
                <p>
                    {{ $count }}
                </p>
            </div>
        </div>
    </div>

</div>

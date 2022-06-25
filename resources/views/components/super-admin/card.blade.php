@props(['title', 'count'])
<div class="overflow-hidden bg-white border shadow card shadow-gray-200 rounded-xl">
    <div class="p-5">
        <div class="grid space-y-2">
            <div class="flex">
                <div class="p-3 bg-gray-300 rounded-lg ">
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

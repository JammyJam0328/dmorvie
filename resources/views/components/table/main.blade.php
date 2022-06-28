<div class="flex flex-col mt-8">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden   md:rounded-lg border border-gray-300">
                <table class="min-w-full divide-y divide-gray-300">
                    {{ $heading }}
                    {{ $body }}
                </table>
            </div>
        </div>
        <div class="mt-5">
            {{ $pagination ?? '' }}
        </div>
    </div>
</div>

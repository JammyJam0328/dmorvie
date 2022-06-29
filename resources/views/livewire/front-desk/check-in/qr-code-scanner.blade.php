<div>
    <div class="flex justify-center bg-white rounded p-2">
        <img id="qr_previewer"
            src="{{ $qr_code ? 'https://api.qrserver.com/v1/create-qr-code/?data=' . $qr_code : 'https://api.qrserver.com/v1/create-qr-code/?data=J7ITSOLUTION' }}"
            alt='qr code'>
    </div>
    <div class="mt-3">
        <x-input wire:model.debounce="qr_code" />
    </div>
    <div class="mt-4 flex w-full">
        <x-button negative
            wire:click="$set('qr_code','')"
            class="w-full">
            CLEAR
        </x-button>
    </div>
</div>

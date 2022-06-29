<x-layouts.front-desk>
    <x-slot name="head">
        Check In
    </x-slot>
    <div>
        <div class="sm:flex">
            <div x-data="{ qrCode: '' }"
                class="sm:w-1/4  p-2 ">
                <div class="flex justify-center bg-white rounded p-2">
                    <img x-bind:src="qrCode != '' ? 'https://api.qrserver.com/v1/create-qr-code/?data=' + qrCode :
                        'https://api.qrserver.com/v1/create-qr-code/?data=J7ITSOLUTION'"
                        alt='qr code'>
                </div>
                <div class="mt-3">
                    <x-input x-model="qrCode"
                        icon="qrcode" />
                </div>
            </div>
            <div class="sm:w-full  p-2 space-y-3">
                <livewire:front-desk.check-in.view-details />
                <livewire:front-desk.check-in.table />
            </div>
        </div>
    </div>
</x-layouts.front-desk>

<div class="sm:flex">
    <div class="sm:w-1/4 p-2 ">
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
    </div>
    <div class="sm:w-full  p-2 space-y-3">
        <div id="customer_info">
            <div class="w-full bg-gradient-to-tr from-cyan-700 to-cyan-400  p-2 rounded-md text-gray-700 ">
                @if ($customer != null && $customer->check_in_time == null)
                    <div>
                        <h2 class="sr-only">Billing Summary</h2>
                        <div class="bg-gray-100 sm:rounded-lg">
                            <div class=" py-6 px-4 sm:px-6  lg:px-8 lg:py-8 lg:grid lg:grid-cols-12 ">
                                <dl class=" text-sm col-span-5">
                                    <div>
                                        <dt class="font-medium text-gray-900">Customer</dt>
                                        <dd class="mt-3 text-gray-500">
                                            <span class="block">
                                                {{ $customer->name }}
                                            </span>
                                            <span class="block">
                                                {{ $customer->qr_code }}
                                            </span>
                                        </dd>
                                    </div>
                                </dl>
                                <dl class="mt-8 divide-y divide-gray-200 text-sm lg:mt-0 lg:col-span-7">
                                    @foreach ($customer->transactions as $key => $transaction)
                                        <div class="p-4 flex items-center justify-between">
                                            <dt class="text-gray-600">
                                                @switch($transaction->transaction_type_id)
                                                    @case(1)
                                                        Check In Room
                                                    @break

                                                    @case(2)
                                                        TV remote + Room Key Deposit
                                                    @break

                                                    @default
                                                @endswitch
                                            </dt>
                                            <dd class="font-medium text-gray-900">
                                                {{ $transaction->amount }}
                                            </dd>
                                        </div>
                                    @endforeach


                                    {{-- <div class="pt-4 flex items-center justify-between">
                                        <dt class="font-medium text-gray-900">Order total</dt>
                                        <dd class="font-medium text-indigo-600">$83.16</dd>
                                    </div> --}}
                                </dl>
                            </div>
                            <div class="mt-4 flex justify-end space-x-3 p-2">
                                <x-button cyan
                                    flat>
                                    Pay Deposit and Check In
                                </x-button>
                                <x-button wire:click="payAll"
                                    spinner="payAll"
                                    cyan>
                                    Pay all and Check In
                                </x-button>
                            </div>
                        </div>
                    </div>
                @else
                    <div>
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="rounded-md bg-yellow-50 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <!-- Heroicon name: solid/exclamation -->
                                    <svg class="h-5 w-5 text-yellow-400"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-yellow-800">Attention needed</h3>
                                    <div class="mt-2 text-sm text-yellow-700">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur,
                                            ipsum similique veniam quo totam eius aperiam dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>

        </div>
    </div>
</div>

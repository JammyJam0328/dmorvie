<div>
    <div class="flex">
        <x-input icon="qrcode"
            wire:model.debounce.500ms="search" />
    </div>
    <x-table.main>
        <x-slot name="heading">
            <x-table.heading>
                <x-table.head label="Name" />
                <x-table.head label="Room" />
                <x-table.head label="Hours" />
                <x-table.head />
            </x-table.heading>
        </x-slot>
        <x-slot name="body">
            <x-table.body>
                @forelse ($customers as $customer)
                    <x-table.row>
                        <x-table.data>
                            {{ $customer->name }}
                        </x-table.data>
                        <x-table.data>
                            ROOM # {{ $customer->check_in_detail->room->number }}
                        </x-table.data>
                        <x-table.data>
                            {{ $customer->check_in_detail->hours }}
                        </x-table.data>
                        <x-table.data>
                            <div class="flex items-center justify-end space-x-2">
                                <x-button wire:click="openDetails({{ $customer->id }})"
                                    cyan>
                                    CHECK OUT
                                </x-button>
                            </div>
                        </x-table.data>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.data colspan="4">
                            <h1 class="text-center"> No customer found.</h1>
                        </x-table.data>
                    </x-table.row>
                @endforelse
            </x-table.body>
        </x-slot>
        <x-slot name="pagintation">
            {{ $customers->links() }}
        </x-slot>
    </x-table.main>
    <div id="checkout_panel">
        <x-modal.card title="Check Out Information"
            wire:model.defer="check_out_modal">
            @php
                $balance = 0;
            @endphp
            <h1 class="mb-2">
                {{ $selected_customer?->name }} | {{ $selected_customer?->qr_code }}
            </h1>
            <div>
                @if ($selected_customer)
                    <ul role="list"
                        class="p-3 text-sm font-medium text-gray-500 bg-gray-100 border-t border-gray-200 divide-y divide-gray-200 rounded-md">
                        @foreach ($selected_customer->transactions as $transaction)
                            @php
                                if ($transaction->paid_at == null) {
                                    $balance += $transaction->amount;
                                }
                            @endphp
                            <li class="flex py-6 space-x-6">
                                <div class="flex-auto space-y-1">
                                    <h3 class="text-gray-900">
                                        @switch($transaction->transaction_type_id)
                                            @case(1)
                                                Check In Room
                                            @break

                                            @case(2)
                                                TV remote + Room Key Deposit
                                            @break

                                            @default
                                        @endswitch
                                    </h3>
                                    <p>
                                        {{ $transaction->amount }}
                                    </p>
                                </div>
                                <p class="flex-none font-medium text-gray-900">
                                    {{ $transaction->paid_at ? 'Paid' : 'Unpaid' }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-2 text-xl font-bold border-t">
                        Total balance : {{ $balance }}
                    </div>
                @endif
            </div>
            <x-slot name="footer">
                <div class="flex justify-end ">
                    @if ($balance > 0)
                        <x-button cyan
                            wire:click="payAndCheckOut">
                            Pay and Checked Out
                        </x-button>
                    @else
                        <x-button cyan
                            wire:click="checkout">
                            Checked Out
                        </x-button>
                    @endif
                </div>
            </x-slot>
        </x-modal.card>
    </div>
</div>

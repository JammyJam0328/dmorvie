<div x-data="{ show: false }">
    {{-- @dump($customer_transaction) --}}
    <div wire:loading.delay.longest 
    wire:loading.class="fixed top-0 left-0 bg-gray-700 flex items-center justify-center w-full h-full bg-opacity-90">
        <div class="animate-pulse ">
            <div class="flex flex-col justify-center  items-center space-x-2">
                <img src="{{ asset('images/dmorvielogo.png') }}" class="h-20 p-2 rounded-full bg-white" alt="">
            </div>
            <h1 class="text-center mt-2 text-white font-poppins text-2xl">Please Wait...</h1>
        </div>

    </div>

    <div wire:target="confirmCheckIn" 
    wire:loading.flex class="fixed z-30 top-0 left-0 bg-gray-700 flex items-center justify-center w-full h-full bg-opacity-90">
        <div class="animate-pulse ">
            <div class="flex flex-col justify-center  items-center space-x-2">
                <img src="{{ asset('images/dmorvielogo.png') }}" class="h-20 p-2 rounded-full bg-white" alt="">
            </div>
            <h1 class="text-center mt-2 text-white font-poppins text-2xl">Please wait while processing your transaction ...</h1>
        </div>
    </div>
    @if ($transaction == 'check-in')
        <button wire:click="closeTransaction" class="absolute -top-7 -right-6 rounded-full h-14 w-14 bg-white ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full text-red-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        @switch($step)
            @case(1)
                <div class="mt-10">
                    <h1 class="text-xl font-bold font-poppins text-center text-white border-b">PLEASE SELECT ROOM TYPE</h1>
                    <div class="max-w-7xl mx-auto mt-10 text-center  ">
                        <div class="space-y-12">

                            <ul role="list" class="mx-auto  grid grid-cols-2 gap-5 space-y-0 lg:grid-cols-4  lg:max-w-5xl">
                                @forelse ($types as $type)
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType({{ $type->id }})"
                                            class="mx-auto h-32 w-32 rounded-full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <h1 class="text-center lg:text-3xl text-3xl text-gray-600 font-black font-poppins uppercase">{{$type->description}}</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @empty
                                    
                                @endforelse
                                <!-- More people... -->
                            </ul>
                        </div>
                    </div>
                </div>
            @break

            @case(2)
                <div class="mt-10">
                    <div class="absolute top-10 left-5">
                        <button wire:click="$set('step', 1)"
                            class="bg-white rounded-lg flex items-center space-x-2 uppercase font-poppins font-bold text-gray-700 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Back</span>
                        </button>
                    </div>
                    <h1 class="text-xl font-bold font-poppins text-center text-white border-b">PLEASE CHOOSE ANY AVAILABLE ROOM</h1>
                    <div class="max-w-7xl mx-auto mt-10  text-center sm:px-6">
                        <div class="space-y-12">

                            <ul role="list"
                                class="x-auto space-y-6 sm:grid sm:grid-cols-2 sm:gap-5 sm:space-y-0  lg:max-w-5xl lg:grid-cols-5">
                                @foreach ($rooms as $room)
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoom({{$room->id}})"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor {{$room->floor->number}}</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #{{$room->number}}</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                

                                <!-- More people... -->
                            </ul>
                        </div>
                    </div>
                </div>
            @break

            @case(3)
            <div class="mt-10">
                <div class="absolute top-10 left-5">
                    <button wire:click="$set('step', 2)"
                        class="bg-white rounded-lg flex items-center space-x-2 uppercase font-poppins font-bold text-gray-700 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Back</span>
                    </button>
                </div>
                <h1 class="text-xl font-bold font-poppins text-center text-white border-b">PLEASE SELECT NUMBER OF HOURS OF STAY</h1>
                <div class="max-w-7xl mx-auto mt-10 text-center  ">
                    <div class="space-y-12">

                        <ul role="list" class="mx-auto  grid grid-cols-2 gap-5 lg:max-w-5xl lg:grid-cols-3">
                            @forelse ($rates as $rate)
                            <li>
                                <div class="space-y-3">
                                    <button wire:click="selectHours({{$rate->id}})"
                                        class="mx-auto h-32 w-32 rounded-full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                        <h1 class="text-center lg:text-3xl text-3xl text-gray-600 font-black font-poppins uppercase">{{$rate->rate->hours}} HOURS</h1>
                                    </button>
                                    <div class="space-y-1">
                                        <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                            <h3></h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @empty
                                
                            @endforelse
                            <!-- More people... -->
                        </ul>
                    </div>
                </div>
            </div>
            @break

            @case(4)
            <div class="mt-10">
                <div class="absolute top-10 left-5">
                    <button wire:click="$set('step', 3)"
                        class="bg-white rounded-lg flex items-center space-x-2 uppercase font-poppins font-bold text-gray-700 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Back</span>
                    </button>
                </div>
                <h1 class="text-xl font-bold font-poppins text-center text-white border-b">PLEASE CONFIRM THE CHECK-IN INFORMATION</h1>
                <div class="max-w-7xl mx-auto mt-5">
                    <div class="bg-white p-2 rounded-md shadow-lg">
                        <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                            <label for="name" class="block text-sm font-poppins font-semibold text-gray-500 uppercase">Your Complete Name</label>
                            <input wire:model="complete_name" type="text" name="name" id="name" class="block w-full border-0 font-poppins p-0 text-gray-700 text-lg placeholder-gray-500 focus:ring-0" placeholder="">
                          </div>
                    </div>
                    <div class="">
                        <ul role="list"
                            class="mx-auto  mt-2 sm:grid sm:grid-cols-2  sm:space-y-0 lg:grid-cols-2 lg:max-w-5xl">
                            <li>
                                <div class="space-y-3 border-r-2 border-dashed">
                                    <div class="mx-auto h-40 w-40  xl:w-80 xl:h-72 rounded-r-md relative flex p-2 flex-col bg-white">
                                        <div class="">
                                            <ul role="list" class="divide-y relative divide-gray-200">
                                              <li class="py-4">
                                                <div class="flex space-x-3">
                                                  <div class="flex-1 space-y-1">
                                                    <div class="flex items-center justify-between">
                                                        @php
                                                            $room_type = \App\Models\Type::where('id',$customer_transaction['roomtype'])->first()->name;
                                                            $room = \App\Models\Room::where('id',$customer_transaction['room_id'])->first();
                                                            $rate = \App\Models\RoomRate::where('id',$customer_transaction['hours'])->first();
                                                            $total = $rate->rate->price + 200;
                                                            
                                                        @endphp
                                                     <div class="desc">
                                                        <h1 class="text-xl leading-6 font-bold uppercase font-poppins text-gray-600 underline">{{$room_type}} Bed Size</h1>
                                                        <h1 class="font-bold uppercase font-poppins text-gray-500 text-sm">Rm#{{$room->id}}(Floor {{$room->floor->number}})</h1>
                                                     </div>
                                                      <p class=" font-bold text-gray-600">
                                                        &#8369;{{number_format($rate->rate->price,2)}}
                                                      </p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </li>
                                              <li class="py-4">
                                                <div class="flex space-x-3">
                                                  <div class="flex-1 space-y-1">
                                                    <div class="flex items-center justify-between">
                                                     <div class="desc">
                                                        <h1 class="text-xl leading-6 font-bold uppercase font-poppins text-gray-600 underline">CHECK-IN DEPOSIT</h1>
                                                        <h1 class="font-bold uppercase font-poppins text-gray-500 text-sm">TV REMOTE + ROOM KEY</h1>
                                                     </div>
                                                      <p class=" font-bold text-gray-600">
                                                        &#8369;200.00
                                                      </p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </li>
                                          
                                              <!-- More items... -->
                                              
                                            </ul>
                                          </div>
                                          <div class="absolute bottom-2 w-full pr-4 ">
                                            <div class="flex w-full justify-between text-lg text-green-700 font-bold font-poppins">
                                                <h1>TOTAL</h1>
                                                <h1>&#8369;{{number_format($total,2)}}</h1>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="space-y-3">
                                    <button wire:click="selectHours({{ 12 }})"
                                        class="mx-auto h-40 w-40  xl:w-80 xl:h-72 relative rounded-l-md flex items-center justify-center bg-white">
                                     <div class="bg-blue-300">
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Welcome to D'Morvie Suites" class="bg-blue-300 h-40" alt="">
                                     </div>
                                     <div class="absolute bottom-4 w-full left-0 ">
                                        <p class="italic text-red-500 text-sm ">Note: Your QR CODE will be produced upon the completion of your transaction. </p>
                                     </div>
                                    </button>
                                    
                                </div>
                            </li>
                           

                            <!-- More people... -->
                        </ul>

                        <div class="mt-2 flex justify-end">
                            <button wire:click="confirmCheckIn"
                                class="bg-white rounded-lg flex items-center space-x-2 uppercase font-poppins font-bold text-gray-700 p-2">
                                <span>Confirm</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @break
            @case(5)
            <div class="max-w-7xl mx-auto mt-5">
                
                <div class="">
                    <ul role="list"
                        class="mx-auto  mt-2 sm:grid sm:grid-cols-2  sm:space-y-0 lg:grid-cols-2 lg:max-w-5xl">
                        <li>
                            <div class="space-y-3 border-r-2 border-dashed">
                                <div class="mx-auto h-40 w-40  xl:w-96 xl:h-80 rounded-r-md relative flex p-2 flex-col bg-white">
                                    <div class="">
                                        <ul role="list" class="divide-y relative divide-gray-200">
                                          <li class="py-4">
                                            <div class="flex space-x-3">
                                              <div class="flex-1 space-y-1">
                                                <div class="flex items-center justify-between">
                                                    @php
                                                        $room_type = \App\Models\Type::where('id',$customer_transaction['roomtype'])->first()->name;
                                                        $room = \App\Models\Room::where('id',$customer_transaction['room_id'])->first();
                                                        $rate = \App\Models\RoomRate::where('id',$customer_transaction['hours'])->first();
                                                        $total = $rate->rate->price + 200;
                                                        
                                                    @endphp
                                                 <div class="desc">
                                                    <h1 class="text-xl leading-6 font-bold uppercase font-poppins text-gray-600 underline">{{$room_type}} Bed Size</h1>
                                                    <h1 class="font-bold uppercase font-poppins text-gray-500 text-sm">Rm#{{$room->id}}(Floor {{$room->floor->number}})</h1>
                                                 </div>
                                                  <p class=" font-bold text-gray-600">
                                                    &#8369;{{number_format($rate->rate->price,2)}}
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="py-4">
                                            <div class="flex space-x-3">
                                              <div class="flex-1 space-y-1">
                                                <div class="flex items-center justify-between">
                                                 <div class="desc">
                                                    <h1 class="text-xl leading-6 font-bold uppercase font-poppins text-gray-600 underline">CHECK-IN DEPOSIT</h1>
                                                    <h1 class="font-bold uppercase font-poppins text-gray-500 text-sm">TV REMOTE + ROOM KEY</h1>
                                                 </div>
                                                  <p class=" font-bold text-gray-600">
                                                    &#8369;200.00
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </li>
                                      
                                          <!-- More items... -->
                                          
                                        </ul>
                                      </div>
                                      <div class="absolute bottom-2 w-full pr-4 ">
                                        <div class="flex w-full justify-between text-lg text-green-700 font-bold font-poppins">
                                            <h1>TOTAL</h1>
                                            <h1>&#8369;{{number_format($total,2)}}</h1>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-3">
                                <button wire:click="selectHours({{ 12 }})"
                                    class="mx-auto h-40 w-40  xl:w-96 xl:h-80 relative rounded-l-md flex items-center justify-center bg-white">
                                 <div class="bg-blue-300">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$code}}" class="bg-blue-300 h-56" alt="">
                                 </div>
                                 <div class="absolute bottom-6 w-full left-0 ">
                                    <p class="text-gray-700 font-inter ">{{$code}}</p>
                                 </div>
                                </button>
                                
                            </div>
                        </li>
                       

                        <!-- More people... -->
                    </ul>

                    <div class="mt-2 flex justify-end">
                        <button wire:click="confirmCheckIn"
                            class="bg-white rounded-lg flex items-center space-x-2 uppercase font-poppins font-bold text-gray-700 p-2">
                            <span>Print</span>
                        </button>
                    </div>
                </div>
            </div>
            @break
            @default
        @endswitch
    @elseif($transaction == 'check-out')
        @switch($checkOut_step)
            @case(1)
            <div x-intersect="$refs.nameInput.focus()">
                <button wire:click="closeTransaction" class="absolute -top-7 -right-6 rounded-full h-14 w-14 bg-white ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full text-red-500" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
                <div class="bg-white rounded-full relative" >
                    <img src="https://i.ibb.co/KGJCkrS/qr-scan.gif" class="rounded-2xl" alt="">
                    <div class="absolute bottom-1 flex flex-col w-full items-center justify-center ">
                        <span class="font-bold text-gray-600">Please Scan your Qr Transaction code</span>
                        <input wire:model="scan"  x-ref="nameInput" type="text" class="h-1 focus:border-0 focus:outline-none border-0 focus:ring-0 bg-gray-100 text-gray-100" autofocus>
                        {{-- @dump($scan) --}}
                    </div>
                </div>
            </div>
                @break
            @case(2)
            <div class="max-w-7xl mx-auto mt-5">
                
                <div class="">
                    <ul role="list"
                        class="mx-auto  mt-2 sm:grid sm:grid-cols-2  sm:space-y-0 lg:grid-cols-2 lg:max-w-5xl">
                        <li>
                            <div class="space-y-3 border-r-2 border-dashed">
                                <div class="mx-auto h-40 w-40  xl:w-96 xl:h-80 rounded-r-md relative flex p-2 flex-col bg-white">
                                    <div class="">
                                        <ul role="list" class="divide-y relative divide-gray-200">
                                          @foreach ($transactions as $transaction)
                                          <li class="py-4">
                                            <div class="flex space-x-3">
                                              <div class="flex-1 space-y-1">
                                                <div class="flex items-center justify-between">
                                                   
                                                 <div class="desc">
                                                    @switch($transaction->transaction_type_id)
                                                        @case(1)
                                                        <h1 class="text-xl leading-6 font-bold uppercase font-poppins text-gray-600 underline">{{$transaction->customer->check_in_detail->room_type}} BED SIZE</h1>
                                                        <h1 class="font-bold uppercase font-poppins text-gray-500 text-sm">Rm#{{$transaction->customer->check_in_detail->room->number}}(floor {{$transaction->customer->check_in_detail->room->floor->number}})</h1>
                                                            @break
                                                        @case(2)
                                                        <h1 class="text-xl leading-6 font-bold uppercase font-poppins text-gray-600 underline">CHECK-IN DEPOSIT</h1>
                                                        <h1 class="font-bold uppercase font-poppins text-gray-500 text-sm">ROOM KEY & TV REMOTE</h1>
                                                            @break
                                                        @default
                                                            
                                                    @endswitch
                                                   
                                                 </div>
                                                  <div class="flex flex-col">
                                                    <p class=" font-bold text-gray-600">
                                                        &#8369;{{number_format($transaction->amount,2)}}
                                                      </p>
                                                      @if ($transaction->paid_at == null)
                                                      <p class="text-xs text-center px-0.5 bg-red-500 text-white rounded-full">unpaid</p>
                                                          @else
                                                          <p class="text-xs text-center px-0.5 bg-green-500 text-white rounded-full">paid</p>
                                                      @endif
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </li>
                                          @endforeach
                                         
                                      
                                          <!-- More items... -->
                                          
                                        </ul>
                                       
                                      </div>
                                      <div class="absolute bottom-2 w-full pr-4 ">
                                        <div class="flex w-full justify-between text-lg text-green-700 font-bold font-poppins">
                                            <h1>TOTAL</h1>
                                            <h1>&#8369; {{number_format($transactions->pluck('amount')->sum(),2)}}</h1>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-3">
                                <button wire:click="selectHours({{ 12 }})"
                                    class="mx-auto h-40 w-40  xl:w-96 xl:h-80 relative rounded-l-md flex items-center justify-center bg-white">
                                 <div class="bg-blue-300">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$scan}}" class="bg-blue-300 h-56" alt="">
                                 </div>
                                 <div class="absolute bottom-6 w-full left-0 ">
                                    <p class="text-gray-700 font-inter ">{{$scan}}</p>
                                 </div>
                                </button>
                                
                            </div>
                        </li>
                       

                        <!-- More people... -->
                    </ul>

                    <div class="mt-3 flex w-full " >
                        @if ($transactions->where('paid_at', null)->count() > 0)
                            <p class="text-lg text-white font-inter text-center">please pay your remaining balance  at the frontdesk. Thank you.</p>
                            <button wire:click="checkOut" class="bg-white px-2 font-bold font-inter rounded text-gray-700 uppercase ">
                                Checkout
                            </button>
                            @else
                            <button wire:click="checkOut" class="bg-white px-2 font-bold font-inter rounded text-gray-700 uppercase ">
                                Checkout
                            </button>
                        @endif
                        <p></p>
                    </div>

                </div>
            </div>
                @break
            @default
                
        @endswitch


    @else
        <div class="mt-20">
            <div class="max-w-7xl mx-auto  px-4 text-center sm:px-6 lg:px-8 ">
                <div class="space-y-12">

                    <ul role="list"
                        class="mx-auto space-y-6 sm:grid sm:grid-cols-2 sm:gap-20 sm:space-y-0 lg:grid-cols-2 lg:max-w-5xl">
                        <li>
                            <div class="space-y-3">
                                <button wire:click="$set('transaction', 'check-in')"
                                    class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56 flex items-center justify-center bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-600"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                    </svg>
                                </button>
                                <div class="space-y-1">
                                    <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                        <h3>CHECK-IN</h3>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-3">
                                <button wire:click="$set('transaction', 'check-out')" @click="@refs.nameInput.focus()"
                                    class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56 flex items-center justify-center bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </button>
                                <div class="space-y-1">
                                    <div class="text-lg leading-6 font-black text-white font-poppins space-y-1">
                                        <h3>CHECK-OUT</h3>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- More people... -->
                    </ul>
                </div>
            </div>
        </div>
    @endif

</div>

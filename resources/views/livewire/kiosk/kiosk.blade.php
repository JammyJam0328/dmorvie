<div>
    @dump($customer_transaction)
    <div wire:loading.delay.longest 
    wire:loading.class="fixed top-0 left-0 bg-gray-700 flex items-center justify-center w-full h-full bg-opacity-90">
        <div class="animate-pulse ">
            <div class="flex flex-col justify-center  items-center space-x-2">
                <img src="{{ asset('images/dmorvielogo.png') }}" class="h-20 p-2 rounded-full bg-white" alt="">
            </div>
            <h1 class="text-center mt-2 text-white font-poppins text-2xl">Please Wait...</h1>
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
                    <h1 class="text-xl font-bold font-poppins text-center text-white border-b">PLEASE SELECT NUMBER OF HOURS OF STAY</h1>
                    <div class="max-w-7xl mx-auto mt-20  px-4 text-center sm:px-6 lg:px-8 ">
                        <div class="space-y-12">

                            <ul role="list"
                                class="mx-auto space-y-6 sm:grid sm:grid-cols-2 sm:gap-20 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56 flex items-center justify-center bg-white">
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">SINGLE BED
                                                SIZE</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                

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
                    <h1 class="text-xl font-bold font-poppins text-center text-white border-b">PLEASE CHOOSE ANY AVAILABLE ROOM
                    </h1>
                    <div class="max-w-7xl mx-auto mt-10  text-center sm:px-6  ">
                        <div class="space-y-12" x-data="{ openRoom: @entangle('openRoom') }">
                            <div x-show="openRoom" x-cloak class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <!--
                                  Background backdrop, show/hide based on modal state.
                              
                                  Entering: "ease-out duration-300"
                                    From: "opacity-0"
                                    To: "opacity-100"
                                  Leaving: "ease-in duration-200"
                                    From: "opacity-100"
                                    To: "opacity-0"
                                -->
                                <div x-show="openRoom" x-cloak
                                x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        
                                <div class="fixed z-10 inset-0 overflow-y-auto">
                                    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                                        <!--
                                      Modal panel, show/hide based on modal state.
                              
                                      Entering: "ease-out duration-300"
                                        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        To: "opacity-100 translate-y-0 sm:scale-100"
                                      Leaving: "ease-in duration-200"
                                        From: "opacity-100 translate-y-0 sm:scale-100"
                                        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    -->
                                        <div x-show="openRoom" x-cloak
                                        x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="relative bg-gradient-to-tr from-gray-300 to-gray-400 rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-4xl sm:w-full sm:p-6">
                                            <button wire:click="$set('openRoom', false)" class="absolute top-0 left-0 h-10 w-10 rounded-br-lg flex items-center justify-center text-white  bg-red-500 shadow-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                  </svg>
                                            </button>
                                            <div class="mt-6 max-w-2xl mx-auto  lg:max-w-7xl  lg:grid lg:grid-cols-3 lg:gap-x-8">
                                                <div
                                                    class="hidden aspect-w-3 border border-gray-400 aspect-h-4 rounded-lg overflow-hidden lg:block">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                                                        alt="Two each of gray, white, and black shirts laying flat."
                                                        class="w-full h-full object-center object-cover">
                                                </div>
                                                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                                                    <div
                                                        class="aspect-w-3 border border-gray-400 aspect-h-2 rounded-lg overflow-hidden">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg"
                                                            alt="Model wearing plain black basic tee."
                                                            class="w-full h-full object-center object-cover">
                                                    </div>
                                                    <div
                                                        class="aspect-w-3 border border-gray-400 aspect-h-2 rounded-lg overflow-hidden">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg"
                                                            alt="Model wearing plain gray basic tee."
                                                            class="w-full h-full object-center object-cover">
                                                    </div>
                                                </div>
                                                <div
                                                    class="aspect-w-4 border border-gray-400 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg"
                                                        alt="Model wearing plain white basic tee."
                                                        class="w-full h-full object-center object-cover">
                                                </div>
                                            </div>
        
                                            <div class="mt-2 flex justify-between items-center">
                                                <div class="font-poppins">
                                                    <h1 class="font-bold leading-6 text-2xl text-green-700">RM #02 - FLOOR #1</h1>
                                                    <h1 class="font-semibold text-gray-500">Single Bed Size</h1>
                                                </div>
                                                <div>
                                                    <button wire:click="$set('step', 4)"  class="bg-gray-700 flex space-x-2 items-center font-bold font-poppins  rounded-lg px-2 p-1 text-white" >
                                                        <span>PROCEED</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                         <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                         <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                       </svg>
                                                     </button>
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                            <ul role="list"
                                class="mx-auto space-y-6 sm:grid sm:grid-cols-2 sm:gap-5 sm:space-y-0 lg:grid-cols-5 lg:max-w-5xl">
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoom"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="space-y-3">
                                        <button wire:click="selectRoomType('single')"
                                            class="mx-auto h-40 w-40 relative rounded-xl full xl:w-40 xl:h-40 flex items-center justify-center bg-white">
                                            <div
                                                class="absolute top-0 left-0 px-2 rounded-tl-xl py-1 font-bold uppercase text-white rounded-br-xl shadow-md bg-green-700">
                                                Floor #1</div>
                                            <h1 class="text-center text-3xl text-gray-600 font-black font-poppins">RM #2</h1>
                                        </button>
                                        <div class="space-y-1">
                                            <div class="text-lg leading-6 font-black font-poppins text-white space-y-1">
                                                <h3></h3>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <!-- More people... -->
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="mt-5 flex justify-center items-center">
                <button class="bg-white flex space-x-2 items-center font-bold font-poppins  rounded-lg px-2 p-1 text-gray-600" >
                   <span>PROCEED</span>
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </button>
            </div> --}}
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
                            <input type="text" name="name" id="name" class="block w-full border-0 font-poppins p-0 text-gray-700 text-lg placeholder-gray-500 focus:ring-0" placeholder="">
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
                                                     <div class="desc">
                                                        <h1 class="text-xl leading-6 font-bold uppercase font-poppins text-gray-600 underline">Single Bed Size</h1>
                                                        <h1 class="font-bold uppercase font-poppins text-gray-500 text-sm">Rm#2(Floor 1)</h1>
                                                     </div>
                                                      <p class=" font-bold text-gray-600">
                                                        &#8369;150.00
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
                                                <h1>&#8369;350.00</h1>
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
                            <button wire:click="confirmCheckIn()"
                                class="bg-white rounded-lg flex items-center space-x-2 uppercase font-poppins font-bold text-gray-700 p-2">
                                
                                <span>Confirm</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @break
            @default
        @endswitch
    @elseif($transaction == 'check-out')
        <button wire:click="closeTransaction" class="absolute -top-7 -right-6 rounded-full h-14 w-14 bg-white ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full text-red-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
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
                                <button wire:click="$set('transaction', 'check-out')"
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

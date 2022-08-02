<div>
    <div class="div relative" x-data="{ add: false }">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-bold font-inter uppercase text-gray-700">{{ $categories->category_name }}</h1>
                <p class="mt-2 text-sm text-gray-700 font-inter">A list of menu in this category.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none flex items-center space-x-2">
                <div class="bg-gray-500 flex justify-center items-center h-9.5 w-9.5 rounded-lg shadow-lg">
                    <svg wire:loading.class="animate-spin" wire:target="addFood" xmlns="http://www.w3.org/2000/svg"
                        class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <x-button icon="plus" x-on:click="add=true" positive label="ADD NEW"
                    class="font-inter font-semibold" />
            </div>
        </div>
        <div class="mt-3  h-[31rem] overflow-y-auto">
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                @forelse ($foods as $food)
                    <li
                        class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                        <div class="flex-1 flex flex-col p-4 relative" x-data="{ option: false }">
                            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-lg shadow-lg"
                                src="https://t3.ftcdn.net/jpg/04/62/93/66/360_F_462936689_BpEEcxfgMuYPfTaIAOC1tCDurmsno7Sp.jpg"
                                alt="">
                            <h3 class="mt-3 text-gray-700 uppercase  font-semibold font-inter">{{ $food->food_name }}
                            </h3>
                            <h3 class=" text-green-700 uppercase text-sm leading-3 font-semibold font-inter">
                                &#8369;{{ number_format($food->food_price, 2) }}
                            </h3>
                            <x-button x-on:click="option = !option" x-on:click.away="option = false" xs
                                right-icon="dots-vertical" dark class="mx-8 mt-2" label="Options" />
                            <ul x-show="option" x-cloak
                                class="absolute -bottom-10  -right-[5.5rem] font-inter  z-10 mt-1 w-32  border-gray-400 border  bg-white shadow-lg max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"
                                tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                aria-activedescendant="listbox-option-3">
                                <!--
                          Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
                  
                          Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                        -->
                                <li class="text-gray-700 hover:bg-gray-50 cursor-pointer  select-none relative py-2 px-2 flex items-center space-x-2 "
                                    id="listbox-option-0" role="option">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-semibold block truncate"> Edit </span>
                                </li>
                                <li class="text-gray-700 hover:bg-gray-50 cursor-pointer select-none relative py-2 px-2 flex items-center space-x-2 "
                                    id="listbox-option-0" role="option">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-semibold block truncate"> Delete </span>
                                </li> <!-- More items... -->
                            </ul>
                        </div>

                    </li>
                @empty
                    <li x-on:click="add=true"
                        class="col-span-1 h-56 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                        <div
                            class="flex items-center h-full justify-center flex-col text-gray-600 cursor-pointer hover:text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="font-bold font-inter uppercase ">Add New Food</span>
                        </div>

                    </li>
                @endforelse


                <!-- More people... -->
            </ul>
            <div class="mt-2">
                {{ $foods->links('vendor.livewire.tailwind') }}
            </div>
        </div>
        <div x-show="add" class="h-[31rem] z-10 w-full " role="dialog" aria-modal="true">
            <!--
              Background backdrop, show/hide based on modal state.
          
              Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div x-show="add" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="absolute inset-0 bg-gray-300 bg-opacity-70 transition-opacity"></div>

            <div class="absolute inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20">
                <!--
                Command palette, show/hide based on modal state.
          
                Entering: "ease-out duration-300"
                  From: "opacity-0 scale-95"
                  To: "opacity-100 scale-100"
                Leaving: "ease-in duration-200"
                  From: "opacity-100 scale-100"
                  To: "opacity-0 scale-95"
              -->
                <div x-show="add" x-cloak x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="mx-auto max-w-2xl relative transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">

                    <div class="absolute top-0 right-0">
                        <div class="relative z-50 w-10 h-10 rounded-bl-lg flex items-center justify-center text-gray-700 hover:text-red-500 cursor-pointer shadow bg-gray-100"
                            x-on:click="add=false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <!-- Results, show/hide based on command palette state -->
                    <ul class="max-h-96 scroll-py-3 overflow-y-auto p-3" id="options" role="listbox">
                        <!-- Active: "bg-gray-100" -->
                        <li class="group flex cursor-default select-none rounded-xl px-2 " id="option-1"
                            role="option" tabindex="-1">
                            <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-green-600">
                                <!-- Heroicon name: outline/pencil-alt -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-4 flex-auto font-inter">
                                <!-- Active: "text-gray-900", Not Active: "text-gray-700" -->
                                <p class="text-sm font-semibold text-gray-700">{{ $categories->category_name }}</p>
                                <!-- Active: "text-gray-700", Not Active: "text-gray-500" -->
                                <p class="text-sm text-gray-500">Add list to the menu.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="py-4 px-6">
                        <div>
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <div
                                            class="bg-gradient-to-tl from-gray-200 to-gray-500  h-48 rounded-lg shadow p-1">
                                            <label
                                                class="w-full h-full flex flex-col items-center relative px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                                                <div wire:loading.flex wire:target="image"
                                                    class="bg-gray-500 bg-opacity-75 absolute top-0 rounded-lg flex items-center justify-center h-full w-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                        wire:loading.class="animate-spin"
                                                        class="h-24 text-gray-500 animate-spin" viewBox="0 0 24 24">
                                                        <path
                                                            d="M6.8042,15A.99956.99956,0,0,0,5.438,14.63379l-1.73242,1a1.00016,1.00016,0,0,0,1,1.73242l1.73242-1A1.00073,1.00073,0,0,0,6.8042,15ZM3.70557,8.36621l1.73242,1a1.00016,1.00016,0,1,0,1-1.73242l-1.73242-1a1.00016,1.00016,0,0,0-1,1.73242ZM6,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H5A1,1,0,0,0,6,12ZM17.1958,9a1.0006,1.0006,0,0,0,1.36621.36621l1.73242-1a1.00016,1.00016,0,1,0-1-1.73242l-1.73242,1A1.00073,1.00073,0,0,0,17.1958,9ZM15,6.8042A1.0006,1.0006,0,0,0,16.36621,6.438l1-1.73242a1.00016,1.00016,0,1,0-1.73242-1l-1,1.73242A1.00073,1.00073,0,0,0,15,6.8042Zm5.29443,8.82959-1.73242-1a1.00016,1.00016,0,1,0-1,1.73242l1.73242,1a1.00016,1.00016,0,0,0,1-1.73242ZM16.36621,17.562a1.00016,1.00016,0,1,0-1.73242,1l1,1.73242a1.00016,1.00016,0,1,0,1.73242-1ZM21,11H19a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm-9,7a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V19A1,1,0,0,0,12,18Zm-3-.8042a.99954.99954,0,0,0-1.36621.36621l-1,1.73242a1.00016,1.00016,0,0,0,1.73242,1l1-1.73242A1.00073,1.00073,0,0,0,9,17.1958ZM12,2a1,1,0,0,0-1,1V5a1,1,0,0,0,2,0V3A1,1,0,0,0,12,2Z" />
                                                    </svg>
                                                </div>
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}"
                                                        class="absolute top-0 w-full h-full object-cover rounded-lg border-gray-400 border"
                                                        alt="">
                                                @else
                                                    <img src="https://t3.ftcdn.net/jpg/04/62/93/66/360_F_462936689_BpEEcxfgMuYPfTaIAOC1tCDurmsno7Sp.jpg"
                                                        alt="">
                                                @endif
                                                <input wire:model="image" type='file' class="hidden" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <div class="isolate -space-y-px rounded-md shadow-sm">
                                        <div
                                            class="relative border border-gray-300 rounded-md rounded-b-none px-3 py-2 focus-within:z-10 focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                            <label for="name" class="block text-xs font-medium text-gray-900">Food
                                                Name</label>
                                            <input type="text" wire:model.lazy="name"
                                                class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                                                placeholder="Adobo">
                                        </div>
                                        <div
                                            class="relative border border-gray-300 rounded-md rounded-t-none px-3 py-2 focus-within:z-10 focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                            <label for="job-title"
                                                class="block text-xs font-medium text-gray-900">Food Price</label>
                                            <input type="number" wire:model.lazy="price"
                                                class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm"
                                                placeholder="&#8369;150.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flex justify-end px-6 pt-2 pb-4">
                        <x-button wire:click="addFood" x-on:click="add=false" spinner="addFood" icon="save" dark
                            label="SAVE" class="font-inter font-semibold" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

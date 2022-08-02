<div>

    <div class="bg-white rounded-lg shadow-lg p-2 flex justify-between items-center">
        <div>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg>
                  <div class="grid grid-cols-3 gap-2">
                   <button class="border p-1 px-4 rounded shadow hover:bg-gray-500 hover:text-white">
                    Categories
                   </button>
                  </div>
            </div>
        </div>
        <div>
            <div class="bg-gray-500 flex justify-center items-center h-10 w-10 rounded-lg shadow-lg">
                <svg wire:loading.class="animate-spin" wire:target="addCategory" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
            </div>
        </div>
       </div>
       <div class="mt-3">
        <div class="px-1 relative" x-data="{add:false}">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                <h1 class="text-xl font-bold font-inter text-gray-700">CATEGORIES</h1>
                <p class="mt-2 text-sm text-gray-700 font-inter">A list of menu categories.</p>
              </div>
              <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <x-button icon="plus" x-on:click="add=true" positive label="ADD NEW" class="font-inter font-semibold" />
              </div>
            </div>
            <div class="bg-white mt-2 shadow overflow-hidden sm:rounded-md">
                <ul role="list" class="divide-y divide-gray-200">
               @forelse ($categories as $category)
               <li>
                <a href="#" class="block">
                  <div class="px-4 py-2 sm:px-6">
                    <div class="flex items-center justify-between">
                      <div class="flex space-x-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                          </svg>
                        <p class="font-bold uppercase font-poppins text-green-600 truncate">{{$category->category_name}}</p>
                      </div>
                      <div class="ml-2 flex-shrink-0 flex">
                        <x-button  href="{{route('kitchen.manage',['id' => $category->id])}}" target="_blank" dark label="MANAGE" right-icon="external-link" class="font-inter font-semibold" />
                      </div>
                    </div>
                   
                  </div>
                </a>
              </li>
               @empty
                   
               @endforelse
              
                </ul>
              </div>
              <div class="mt-2">
                {{$categories->links('vendor.livewire.tailwind')}}
              </div>
              {{-- <div class="absolute bg-gray-300 left-0 top-0 bg-opacity-70 w-full h-[31rem]">
               <div class="flex w-full justify-center ">
                sdsdsd
               </div>
              </div> --}}
              <div x-show="add" class="h-[31rem] z-10" role="dialog" aria-modal="true">
                <!--
                  Background backdrop, show/hide based on modal state.
              
                  Entering: "ease-out duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "ease-in duration-200"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div x-show="add" x-cloak
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
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
                  <div x-show="add" x-cloak 
                  x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                  class="mx-auto max-w-xl relative transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">
                    
                    <div class="absolute top-0 right-0">
                        <div class="relative z-50 w-10 h-10 rounded-bl-lg flex items-center justify-center text-gray-700 hover:text-red-500 cursor-pointer shadow bg-gray-100" x-on:click="add=false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg>
                        </div>
                    </div>
              
                    <!-- Results, show/hide based on command palette state -->
                    <ul class="max-h-96 scroll-py-3 overflow-y-auto p-3" id="options" role="listbox">
                      <!-- Active: "bg-gray-100" -->
                      <li class="group flex cursor-default select-none rounded-xl px-2 " id="option-1" role="option" tabindex="-1">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-green-600">
                          <!-- Heroicon name: outline/pencil-alt -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="ml-4 flex-auto font-inter">
                          <!-- Active: "text-gray-900", Not Active: "text-gray-700" -->
                          <p class="text-sm font-medium text-gray-700">Categories</p>
                          <!-- Active: "text-gray-700", Not Active: "text-gray-500" -->
                          <p class="text-sm text-gray-500">Add Category.</p>
                        </div>
                      </li>
                    </ul>
              
                    <div class="py-4 px-6">
                        <div class="border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-gray-500 focus-within:border-gray-500">
                            <label for="name" class="block text-xs font-medium font-inter text-gray-900">Category Name</label>
                            <input wire:model="name" type="text" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="">
                          </div>
                    </div>

                    <div class="flex justify-end px-6 pt-2 pb-4">
                        <x-button wire:click="addCategory" x-on:click="add=false" spinner="addCategory" icon="save" dark label="SUBMIT" class="font-inter font-semibold" />
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
</div>

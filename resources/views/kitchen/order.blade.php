<x-layouts.kitchen>
   @section('breadcrumbs')
   <h1 class="text-sm">Choose Category</h1>
   <ul role="list" class="mt-2 grid grid-cols-1 gap-5 sm:gap-2 sm:grid-cols-2 lg:grid-cols-5">
       <li class="col-span-1 flex shadow-sm bg-white border rounded-full">
           <div class="flex w-full">
               <div class="bg-gray-500 h-12 flex w-12 rounded-full relative">
                   <svg xmlns="http://www.w3.org/2000/svg" class="absolute" enable-background="new 0 0 64 64"
                       viewBox="0 0 64 64">
                       <circle cx="32" cy="32" r="32" fill="#ebebeb" />
                       <circle cx="32" cy="32" r="24.8" fill="#fff"
                           transform="rotate(-34.845 32 31.998)" />
                       <circle cx="32" cy="32" r="23.5" fill="#dadde1" />
                       <path fill="#80c350"
                           d="M51.9,18.7c-0.6,1.7-3.2,2.2-4.4,0.8c1,3.1,4.5,4.6,6.2,7.4c0.8,1.2,0.9,3.3-0.5,3.8c-0.6,0.2-1.2,0.1-1.7,0.3
 c-1,0.4-1.1,1.8-0.7,2.7c0.4,0.9,1.3,1.6,2,2.4c1.6,1.8,2.5,4.3,2.4,6.7c-1.5-0.9-2.8-2.2-3.8-3.6c-0.5,2.1-0.5,4.2-0.1,6.3
 c0.1,0.6,0.3,1.2,0.1,1.7c-0.4,1.2-2,1.4-3.3,1.3c-1.3-0.1-2.8-0.2-3.5,0.9c-0.8,1.2,0.2,3-0.4,4.3c-0.6,1.2-2.2,1.5-3.4,1
 c-1.2-0.5-2-1.6-2.8-2.6c-1.2,1.1-2.5,2.1-3.7,3.2c-0.2,0.2-0.4,0.4-0.7,0.4c-0.3,0-0.6-0.2-0.8-0.4c-1.7-1.4-3.5-2.9-3.9-5.1
 c-1,1.1-2.1,2.2-3.1,3.3c-1.7-1.2-2.9-2.9-3.5-4.8c-1.1-0.1-1.9,1-2.9,1.4c-2,0.9-4.1-0.9-5.5-2.6c0.8-1,1.6-2,2.5-3
 c-1-1.5-3.4-1.3-4.7-2.5c-1.2-1-1.4-2.8-1.4-4.4c2.1-1.3,4.7-1.8,7.1-1.4c-2.9-1.8-5.6-3.7-8.3-5.8c0.9,0.1,1.9,0.1,2.8,0.2
 c0.4-1.8,0-3.7-0.9-5.2c-0.4-0.6-0.9-1.2-1.1-1.8c-0.2-0.7-0.1-1.5,0.5-1.9c0.5-0.3,1.1-0.2,1.6-0.1c2,0.4,4.1,0.7,6.1,1.1
 c-0.7-2.2-1.1-4.6-1.1-6.9c0-1.4,0.1-2.9,0.9-4.1c0.8-1.2,2.4-1.9,3.7-1.2c2.1,1.1,1.2,4.5,2.6,6.5c1.4-4,4.1-7.6,7.6-10
 c0.3-0.2,0.7-0.4,1.1-0.3c0.3,0.1,0.5,0.5,0.6,0.8c0.6,1.7,0.8,3.5,0.6,5.3c0,0.3-0.1,0.6,0,0.9c0.4,0.8,1.6,0.4,2.2-0.2
 c1.8-1.7,3.6-4.9,6.4-4.9c-1.4,3-2.7,3.4,0.8,5.3C46.1,15.4,49.1,16.9,51.9,18.7z" />
                       <path fill="#fff"
                           d="M6.3,43.5c-3.1-3.1-3.1-8,0-11c3.1-3.1,8-3.1,11,0c3.1,3.1,3.1,8,0,11C14.3,46.5,9.4,46.5,6.3,43.5z" />
                       <path fill="#f5e346"
                           d="M11.9 38.9l-1.5 5.4c0 .2.1.4.3.4 2 .3 4.1-.2 5.7-1.5.1-.1.2-.3 0-.5l-4-4C12.2 38.6 11.9 38.7 11.9 38.9zM18.2 36c.2 0 .3-.2.2-.4-.3-.9-.9-1.8-1.6-2.6-.7-.7-1.6-1.3-2.6-1.6-.2-.1-.4 0-.4.2L12.4 37c-.1.2.2.5.4.4L18.2 36zM5.5 39.9c-.2 0-.3.2-.2.4.3.9.9 1.8 1.6 2.6.7.7 1.6 1.3 2.6 1.6.2.1.4 0 .4-.2l1.5-5.4c.1-.2-.2-.5-.4-.4L5.5 39.9zM12.7 38.5l4 4c.1.1.4.1.5 0 1.4-1.6 1.9-3.7 1.5-5.7 0-.2-.2-.3-.4-.3l-5.4 1.5C12.6 38 12.6 38.3 12.7 38.5zM11 37.4l-4-4c-.1-.1-.4-.1-.5 0-1.4 1.6-1.9 3.7-1.5 5.7 0 .2.2.3.4.3l5.4-1.5C11.1 37.9 11.2 37.6 11 37.4zM11.9 36.9l1.5-5.4c0-.2-.1-.4-.3-.4-2-.3-4.1.2-5.7 1.5-.1.1-.2.3 0 .5l4 4C11.5 37.2 11.8 37.2 11.9 36.9z" />
                       <path fill="#e14a4a"
                           d="M31.6,57.3c-3.1,3.1-8.1,3.2-11.2,0.2c-3-3-2.9-8,0.2-11.2c3.1-3.1,8.1-3.2,11.2-0.2
       C34.9,49.2,34.8,54.2,31.6,57.3z" />
                       <polygon fill="#7dbc4f"
                           points="26.9 52.7 29.8 52.9 27.2 51.6 28.9 49.2 26.5 50.8 25.2 48.2 25.4 51.1 22.5 50.8 25.1 52.1 23.4 54.5 25.8 52.9 27.1 55.5" />
                       <path fill="#6ca341"
                           d="M26.8,51.9c0,0.4-0.3,0.6-0.6,0.6s-0.6-0.3-0.6-0.6s0.3-0.6,0.6-0.6S26.8,51.5,26.8,51.9z" />
                       <g>
                           <path fill="#f3bf8d"
                               d="M49.9,14C42,6.1,28.7,6.5,20.3,14.9c-5,5-7.2,11.6-6.5,17.9c5.1-4.1,12.4-4,16.8,0.4
       c4.5,4.5,4.5,11.7,0.4,16.8c6.2,0.7,12.9-1.5,17.9-6.5C57.4,35.1,57.8,21.9,49.9,14z" />
                           <path fill="#9da6b1"
                               d="M30.4,50.3l0.4-0.5c4.1-5,3.9-12.1-0.4-16.3C26.1,29.2,19.1,29,14,33.1l-0.5,0.4l-0.1-0.7
       c-0.7-6.6,1.7-13.3,6.6-18.2c8.6-8.6,22.1-9,30.1-0.9c8,8,7.6,21.5-0.9,30.1c-4.9,4.9-11.5,7.3-18.2,6.6L30.4,50.3z M30.9,33
       c4.4,4.4,4.7,11.5,0.9,16.8c6.2,0.5,12.3-1.9,16.9-6.4c8.3-8.3,8.7-21.3,0.9-29.1c-7.8-7.8-20.8-7.3-29.1,0.9
       c-4.6,4.6-6.9,10.7-6.4,16.9C19.4,28.2,26.5,28.6,30.9,33z" />
                           <path fill="#f47c38"
                               d="M47.1 18.1l-1.8 1.8c4.1 4.5 5.3 10.2 2.5 12.9-.1.1-.3.3-.4.4 2.3-2.9 1-8.2-2.9-12.5L41.1 24c4.7 5.2 5.7 12.1 2 15.8-.2.2-.4.3-.6.5 3-3.8 2-10.3-2.5-15.2l-2.7 2.7c4.6 5.2 4.8 12.9.3 17.5-.2.2-.5.4-.7.6 3.9-4.6 3.5-11.8-.9-16.8l-2 2c-.9.9-1.1 2.4-.5 3.5 2.6 4.2 2.6 9.6.1 14.1 5.2-.1 10.3-2.3 14.2-6.2 6.7-6.7 8-16.6 3.7-23.9C50.7 17 48.4 16.7 47.1 18.1zM18 26.9c.2-.2.4-.5.6-.7 4.6-4.6 12.2-4.4 17.5.3l2.7-2.7c-4.9-4.5-11.4-5.6-15.2-2.5.2-.2.3-.4.5-.6 3.6-3.6 10.6-2.7 15.8 2l3.4-3.4c-4.3-3.9-9.6-5.1-12.5-2.9.1-.1.2-.3.4-.4 2.7-2.7 8.4-1.6 12.9 2.5l1.8-1.8c1.3-1.3 1.1-3.6-.5-4.5C37.9 8 28 9.3 21.3 16c-3.9 3.9-6.1 9-6.2 14.2 4.5-2.5 9.9-2.4 14.1.1 1.1.7 2.6.5 3.5-.5l2-2C29.8 23.4 22.6 23 18 26.9z" />
                       </g>
                   </svg>
               </div>
               <div class=" flex-1 w-full text-gray-600 px-1">
                   <span class="text-sm leading-tight">BREAKFAST COMBO MEALS</span>
               </div>
           </div>
       </li>
       <li class="col-span-1 flex shadow-sm bg-white border rounded-full">
           <div class="flex w-full">
               <div class="bg-gray-500 h-12 flex w-12 rounded-full relative">
                   <svg xmlns="http://www.w3.org/2000/svg" class="absolute" enable-background="new 0 0 64 64"
                       viewBox="0 0 64 64">
                       <circle cx="32" cy="32" r="32" fill="#ebebeb" />
                       <circle cx="32" cy="32" r="24.8" fill="#fff"
                           transform="rotate(-34.845 32 31.998)" />
                       <circle cx="32" cy="32" r="23.5" fill="#dadde1" />
                       <path fill="#80c350"
                           d="M51.9,18.7c-0.6,1.7-3.2,2.2-4.4,0.8c1,3.1,4.5,4.6,6.2,7.4c0.8,1.2,0.9,3.3-0.5,3.8c-0.6,0.2-1.2,0.1-1.7,0.3
 c-1,0.4-1.1,1.8-0.7,2.7c0.4,0.9,1.3,1.6,2,2.4c1.6,1.8,2.5,4.3,2.4,6.7c-1.5-0.9-2.8-2.2-3.8-3.6c-0.5,2.1-0.5,4.2-0.1,6.3
 c0.1,0.6,0.3,1.2,0.1,1.7c-0.4,1.2-2,1.4-3.3,1.3c-1.3-0.1-2.8-0.2-3.5,0.9c-0.8,1.2,0.2,3-0.4,4.3c-0.6,1.2-2.2,1.5-3.4,1
 c-1.2-0.5-2-1.6-2.8-2.6c-1.2,1.1-2.5,2.1-3.7,3.2c-0.2,0.2-0.4,0.4-0.7,0.4c-0.3,0-0.6-0.2-0.8-0.4c-1.7-1.4-3.5-2.9-3.9-5.1
 c-1,1.1-2.1,2.2-3.1,3.3c-1.7-1.2-2.9-2.9-3.5-4.8c-1.1-0.1-1.9,1-2.9,1.4c-2,0.9-4.1-0.9-5.5-2.6c0.8-1,1.6-2,2.5-3
 c-1-1.5-3.4-1.3-4.7-2.5c-1.2-1-1.4-2.8-1.4-4.4c2.1-1.3,4.7-1.8,7.1-1.4c-2.9-1.8-5.6-3.7-8.3-5.8c0.9,0.1,1.9,0.1,2.8,0.2
 c0.4-1.8,0-3.7-0.9-5.2c-0.4-0.6-0.9-1.2-1.1-1.8c-0.2-0.7-0.1-1.5,0.5-1.9c0.5-0.3,1.1-0.2,1.6-0.1c2,0.4,4.1,0.7,6.1,1.1
 c-0.7-2.2-1.1-4.6-1.1-6.9c0-1.4,0.1-2.9,0.9-4.1c0.8-1.2,2.4-1.9,3.7-1.2c2.1,1.1,1.2,4.5,2.6,6.5c1.4-4,4.1-7.6,7.6-10
 c0.3-0.2,0.7-0.4,1.1-0.3c0.3,0.1,0.5,0.5,0.6,0.8c0.6,1.7,0.8,3.5,0.6,5.3c0,0.3-0.1,0.6,0,0.9c0.4,0.8,1.6,0.4,2.2-0.2
 c1.8-1.7,3.6-4.9,6.4-4.9c-1.4,3-2.7,3.4,0.8,5.3C46.1,15.4,49.1,16.9,51.9,18.7z" />
                       <path fill="#fff"
                           d="M6.3,43.5c-3.1-3.1-3.1-8,0-11c3.1-3.1,8-3.1,11,0c3.1,3.1,3.1,8,0,11C14.3,46.5,9.4,46.5,6.3,43.5z" />
                       <path fill="#f5e346"
                           d="M11.9 38.9l-1.5 5.4c0 .2.1.4.3.4 2 .3 4.1-.2 5.7-1.5.1-.1.2-.3 0-.5l-4-4C12.2 38.6 11.9 38.7 11.9 38.9zM18.2 36c.2 0 .3-.2.2-.4-.3-.9-.9-1.8-1.6-2.6-.7-.7-1.6-1.3-2.6-1.6-.2-.1-.4 0-.4.2L12.4 37c-.1.2.2.5.4.4L18.2 36zM5.5 39.9c-.2 0-.3.2-.2.4.3.9.9 1.8 1.6 2.6.7.7 1.6 1.3 2.6 1.6.2.1.4 0 .4-.2l1.5-5.4c.1-.2-.2-.5-.4-.4L5.5 39.9zM12.7 38.5l4 4c.1.1.4.1.5 0 1.4-1.6 1.9-3.7 1.5-5.7 0-.2-.2-.3-.4-.3l-5.4 1.5C12.6 38 12.6 38.3 12.7 38.5zM11 37.4l-4-4c-.1-.1-.4-.1-.5 0-1.4 1.6-1.9 3.7-1.5 5.7 0 .2.2.3.4.3l5.4-1.5C11.1 37.9 11.2 37.6 11 37.4zM11.9 36.9l1.5-5.4c0-.2-.1-.4-.3-.4-2-.3-4.1.2-5.7 1.5-.1.1-.2.3 0 .5l4 4C11.5 37.2 11.8 37.2 11.9 36.9z" />
                       <path fill="#e14a4a"
                           d="M31.6,57.3c-3.1,3.1-8.1,3.2-11.2,0.2c-3-3-2.9-8,0.2-11.2c3.1-3.1,8.1-3.2,11.2-0.2
       C34.9,49.2,34.8,54.2,31.6,57.3z" />
                       <polygon fill="#7dbc4f"
                           points="26.9 52.7 29.8 52.9 27.2 51.6 28.9 49.2 26.5 50.8 25.2 48.2 25.4 51.1 22.5 50.8 25.1 52.1 23.4 54.5 25.8 52.9 27.1 55.5" />
                       <path fill="#6ca341"
                           d="M26.8,51.9c0,0.4-0.3,0.6-0.6,0.6s-0.6-0.3-0.6-0.6s0.3-0.6,0.6-0.6S26.8,51.5,26.8,51.9z" />
                       <g>
                           <path fill="#f3bf8d"
                               d="M49.9,14C42,6.1,28.7,6.5,20.3,14.9c-5,5-7.2,11.6-6.5,17.9c5.1-4.1,12.4-4,16.8,0.4
       c4.5,4.5,4.5,11.7,0.4,16.8c6.2,0.7,12.9-1.5,17.9-6.5C57.4,35.1,57.8,21.9,49.9,14z" />
                           <path fill="#9da6b1"
                               d="M30.4,50.3l0.4-0.5c4.1-5,3.9-12.1-0.4-16.3C26.1,29.2,19.1,29,14,33.1l-0.5,0.4l-0.1-0.7
       c-0.7-6.6,1.7-13.3,6.6-18.2c8.6-8.6,22.1-9,30.1-0.9c8,8,7.6,21.5-0.9,30.1c-4.9,4.9-11.5,7.3-18.2,6.6L30.4,50.3z M30.9,33
       c4.4,4.4,4.7,11.5,0.9,16.8c6.2,0.5,12.3-1.9,16.9-6.4c8.3-8.3,8.7-21.3,0.9-29.1c-7.8-7.8-20.8-7.3-29.1,0.9
       c-4.6,4.6-6.9,10.7-6.4,16.9C19.4,28.2,26.5,28.6,30.9,33z" />
                           <path fill="#f47c38"
                               d="M47.1 18.1l-1.8 1.8c4.1 4.5 5.3 10.2 2.5 12.9-.1.1-.3.3-.4.4 2.3-2.9 1-8.2-2.9-12.5L41.1 24c4.7 5.2 5.7 12.1 2 15.8-.2.2-.4.3-.6.5 3-3.8 2-10.3-2.5-15.2l-2.7 2.7c4.6 5.2 4.8 12.9.3 17.5-.2.2-.5.4-.7.6 3.9-4.6 3.5-11.8-.9-16.8l-2 2c-.9.9-1.1 2.4-.5 3.5 2.6 4.2 2.6 9.6.1 14.1 5.2-.1 10.3-2.3 14.2-6.2 6.7-6.7 8-16.6 3.7-23.9C50.7 17 48.4 16.7 47.1 18.1zM18 26.9c.2-.2.4-.5.6-.7 4.6-4.6 12.2-4.4 17.5.3l2.7-2.7c-4.9-4.5-11.4-5.6-15.2-2.5.2-.2.3-.4.5-.6 3.6-3.6 10.6-2.7 15.8 2l3.4-3.4c-4.3-3.9-9.6-5.1-12.5-2.9.1-.1.2-.3.4-.4 2.7-2.7 8.4-1.6 12.9 2.5l1.8-1.8c1.3-1.3 1.1-3.6-.5-4.5C37.9 8 28 9.3 21.3 16c-3.9 3.9-6.1 9-6.2 14.2 4.5-2.5 9.9-2.4 14.1.1 1.1.7 2.6.5 3.5-.5l2-2C29.8 23.4 22.6 23 18 26.9z" />
                       </g>
                   </svg>
               </div>
               <div class=" flex-1 w-full text-gray-600 px-1">
                   <span class="text-sm leading-tight">BREAKFAST COMBO MEALS</span>
               </div>
           </div>
       </li>
   </ul>
   @endsection
   @section('order-transaction')
       <div class=" p-1 py-2 border-b flex justify-between items-center text-gray-600 font-inter px-2">
        <h1 class="font-bold ">New Order Bill</h1>
        <span class="text-xs">{{\Carbon\Carbon::now()->format('l jS M Y')}}</span>
       </div>
       <div class="bg-blue-300 h-64 py-2">
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul role="list" class="divide-y divide-gray-200">
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="px-4 py-4 sm:px-6">
                    <div class="flex items-center justify-between">
                      <p class="text-sm font-medium text-indigo-600 truncate">Back End Developer</p>
                      <div class="ml-2 flex-shrink-0 flex">
                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Full-time</p>
                      </div>
                    </div>
                    <div class="mt-2 sm:flex sm:justify-between">
                      <div class="sm:flex">
                        <p class="flex items-center text-sm text-gray-500">
                          <!-- Heroicon name: solid/users -->
                          <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                          </svg>
                          Engineering
                        </p>
                        <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                          <!-- Heroicon name: solid/location-marker -->
                          <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                          </svg>
                          Remote
                        </p>
                      </div>
                      <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                        <!-- Heroicon name: solid/calendar -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        <p>
                          Closing on
                          <time datetime="2020-01-07">January 7, 2020</time>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
          
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="px-4 py-4 sm:px-6">
                    <div class="flex items-center justify-between">
                      <p class="text-sm font-medium text-indigo-600 truncate">Front End Developer</p>
                      <div class="ml-2 flex-shrink-0 flex">
                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Full-time</p>
                      </div>
                    </div>
                    <div class="mt-2 sm:flex sm:justify-between">
                      <div class="sm:flex">
                        <p class="flex items-center text-sm text-gray-500">
                          <!-- Heroicon name: solid/users -->
                          <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                          </svg>
                          Engineering
                        </p>
                        <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                          <!-- Heroicon name: solid/location-marker -->
                          <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                          </svg>
                          Remote
                        </p>
                      </div>
                      <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                        <!-- Heroicon name: solid/calendar -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        <p>
                          Closing on
                          <time datetime="2020-01-07">January 7, 2020</time>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
          
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="px-4 py-4 sm:px-6">
                    <div class="flex items-center justify-between">
                      <p class="text-sm font-medium text-indigo-600 truncate">User Interface Designer</p>
                      <div class="ml-2 flex-shrink-0 flex">
                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Full-time</p>
                      </div>
                    </div>
                    <div class="mt-2 sm:flex sm:justify-between">
                      <div class="sm:flex">
                        <p class="flex items-center text-sm text-gray-500">
                          <!-- Heroicon name: solid/users -->
                          <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                          </svg>
                          Design
                        </p>
                        <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                          <!-- Heroicon name: solid/location-marker -->
                          <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                          </svg>
                          Remote
                        </p>
                      </div>
                      <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                        <!-- Heroicon name: solid/calendar -->
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        <p>
                          Closing on
                          <time datetime="2020-01-14">January 14, 2020</time>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
       </div>
   @endsection
</x-layouts.kitchen>
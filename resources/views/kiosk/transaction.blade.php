<x-layouts.kiosk>
  <div class="lg:flex w-full hidden  justify-center items-center space-x-2">
    <img src="{{asset('images/dmorvielogo.png')}}" class="h-14" alt="">
    <h1 class="text-3xl font-black font-inter text-white">D'MORVIE SUITES</h1>
  </div>
  <div class="lg:hidden  flex flex-col justify-center items-center">
    <img src="{{asset('images/dmorvielogo.png')}}" class="h-14" alt="">
    <h1 class="text-3xl font-black font-inter text-white">D'MORVIE SUITES</h1>
  </div>
  <div class="flex justify-center items-center space-x-2">
    <h1 class="text-lg text-center text-white">Your Cheaper and Satisfying Stay in Town</h1>
  </div>
  <livewire:kiosk.kiosk/>
</x-layouts.kiosk>

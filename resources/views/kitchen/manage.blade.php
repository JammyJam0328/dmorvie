<x-layouts.kitchen>
    @section('main')
    <livewire:kitchen.manage 
    :category_id="request('id')"
    />

  
    @endsection
</x-layouts.kitchen>

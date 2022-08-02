<?php

namespace App\Http\Livewire\Kitchen;

use Livewire\Component;
use App\Models\FoodCategory;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Menu extends Component
{
    use WithPagination;
    public $name;
    use Actions;
    public function render()
    {
        return view('livewire.kitchen.menu',[
            'categories' => FoodCategory::where('branch_id',auth()->user()->branch_id)->paginate(7),
        ]);
    }

    public function addCategory() : void{
        $this->validate([
            'name' => 'required|string|max:255',
        ]);
      FoodCategory::create([
        'category_name' => $this->name,
        'branch_id' => auth()->user()->branch_id,
      ]);
        $this->name = '';
        $this->notification([
            'title'       => 'Category saved!',
            'description' => 'Your created category was successfull saved',
            'icon'        => 'success'

        ]);
    }
    
}

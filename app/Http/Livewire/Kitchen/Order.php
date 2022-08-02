<?php

namespace App\Http\Livewire\Kitchen;

use Livewire\Component;
use App\Models\Food;
use App\Models\FoodCategory;

class Order extends Component
{
    public $category = 1;
    public function render()
    {
        return view('livewire.kitchen.order', [
            'foods' => Food::where('food_category_id', 'like', '%' . $this->category . '%')->get(),
            'categories' => FoodCategory::where('branch_id', auth()->user()->branch_id)->get(),
        ]);
    }
}

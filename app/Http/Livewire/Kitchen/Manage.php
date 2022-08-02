<?php

namespace App\Http\Livewire\Kitchen;

use Livewire\Component;
use App\Models\FoodCategory;
use Livewire\WithFileUploads;
use App\Models\Food;
use WireUi\Traits\Actions;
use Livewire\WithPagination;


class Manage extends Component
{
    use Actions;
    public $category_id;
    public $image;
    public $name;
    public $price;
    use WithFileUploads;
    use WithPagination;
    public function render()
    {
        // dd($this->category_id);
        return view('livewire.kitchen.manage', [
            'categories' => FoodCategory::where('id', $this->category_id)->first(),
            'foods' => Food::where('food_category_id', $this->category_id)->paginate(2),
        ]);
    }

    public function addFood()
    {
        // dd('sjdshdghsgd');
        $this->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            // 'image' => 'required|image|max:2048',
        ]);
        $food = Food::create([
            'food_name' => $this->name,
            'food_price' => $this->price,
            'food_category_id' => $this->category_id,
            // 'branch_id' => auth()->user()->branch_id,
        ]);
        // $food->image = $this->image->store('foods');
        // $food->save();
        $this->name = '';
        $this->price = '';
        $this->image = '';
        $this->notification([
            'title'       => 'Food saved!',
            'description' => 'Your created food was successfull saved',
            'icon'        => 'success'

        ]);
    }
}

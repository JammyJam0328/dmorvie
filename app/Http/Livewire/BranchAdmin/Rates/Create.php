<?php

namespace App\Http\Livewire\BranchAdmin\Rates;

use Livewire\Component;
use App\Models\{Rate,Branch};
use WireUi\Traits\Actions;
class Create extends Component
{
    use Actions;
    // --inputs
    public $price,$hours,$type_id,$description;
    // --
    // --arrays
    public $types = [];
    // --
    // actions
    public $create_rate_modal=false;
    // --
    // --validations
    protected $rules=[
        'price'=>'required|numeric',
        'hours'=>'required|numeric',
        'type_id'=>'required|numeric',
        'description'=>'nullable|string|max:255',
    ];
    protected $validationAttributes=[
        'type_id'=>'type',
    ];
    // --

    // --methods
    public function render()
    {
        return view('livewire.branch-admin.rates.create');
    }

    public function submitHandler()
    {
        $this->validate();
        Rate::create([
            'price'=>$this->price,
            'hours'=>$this->hours,
            'type_id'=>$this->type_id,
            'description'=>$this->description,
            'branch_id'=>auth()->user()->branch_id,
        ]);
        $this->reset([
            'price','hours','type_id','description',
        ]);
        $this->create_rate_modal=false;
        $this->notification([
            'title'=>'Success',
            'description'=>'Rate created successfully',
            'icon'=>'success',
        ]);
        activity()->log('Created a new rate');
        $this->emit('refreshList');
    }
}

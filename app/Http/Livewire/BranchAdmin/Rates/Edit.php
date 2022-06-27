<?php

namespace App\Http\Livewire\BranchAdmin\Rates;

use Livewire\Component;
use App\Models\{Rate,Branch};
use WireUi\Traits\Actions;
class Edit extends Component
{
    use Actions;
    // --inputs
    public $price,$hours,$type_id,$description;
    // --
    // --arrays
    public $types = [];
    // --
    // actions
    public $edit_rate_modal=false;
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
    // --listeners
    protected $listeners = ['edit_rate'=>'edit_rate_handler'];
    // --
    // --computes
    public $selected_rate;
    // --methods
    public function render()
    {
        return view('livewire.branch-admin.rates.edit');
    }
    public function edit_rate_handler($id)
    {
        $this->selected_rate=Rate::where('id',$id)->first();
        $this->price = $this->selected_rate->price;
        $this->hours = $this->selected_rate->hours;
        $this->type_id = $this->selected_rate->type_id;
        $this->description = $this->selected_rate->description;
        $this->edit_rate_modal=true;
    }

    public function submitHandler()
    {
        $this->validate();
        $this->selected_rate->update([
            'price'=>$this->price,
            'hours'=>$this->hours,
            'type_id'=>$this->type_id,
            'description'=>$this->description,
        ]);
        $this->reset([
            'price','hours','type_id','description',
        ]);
        $this->edit_rate_modal=false;
        $this->notification([
            'title'=>'Success',
            'description'=>'Rate updated successfully',
            'icon'=>'success',
        ]);
        activity()->log('Updated a rate');
        $this->emit('refreshList');
    }
}

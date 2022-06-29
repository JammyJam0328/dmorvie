<?php

namespace App\Http\Livewire\BranchAdmin\Rates;

use Livewire\Component;
use App\Models\{Rate,Branch,RoomRate,RoomType};
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
        $rate = Rate::create([
            'price'=>$this->price,
            'hours'=>$this->hours,
            'type_id'=>$this->type_id,
            'description'=>$this->description,
            'branch_id'=>auth()->user()->branch_id,
        ]);
        $rooms = RoomType::where('type_id',$rate->type_id)->get();
        foreach ($rooms as $key => $room) {
            RoomRate::create([
                'room_id'=>$room->id,
                'rate_id'=>$rate->id,
            ]);
        }
        $this->reset([
            'price','hours','type_id','description','create_rate_modal',
        ]);
        $this->notification([
            'title'=>'Success',
            'description'=>'Rate created successfully',
            'icon'=>'success',
        ]);
        activity()->log('Created a new rate');
        $this->emit('refreshList');
    }
}

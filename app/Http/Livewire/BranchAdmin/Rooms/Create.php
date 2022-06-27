<?php

namespace App\Http\Livewire\BranchAdmin\Rooms;

use Livewire\Component;
use App\Models\{Room,Branch};
use WireUi\Traits\Actions;
class Create extends Component
{
    use Actions;
    // --inputs
    public $number,$status_id,$floor_id;
    // --
    // --actions
    public $create_room_modal=false;
    // --
    // --arrays
    public $floors = [];
    public $statuses = [];
    // --
    // --validations
    protected $rules=[
        'number'=>'required|numeric',
        'status_id'=>'required|numeric',
        'floor_id'=>'required|numeric',
    ];
    protected $validationAttributes=[
        'status_id'=>'status',
        'floor_id'=>'floor',
    ];
    public function render()
    {
        return view('livewire.branch-admin.rooms.create');
    }
    public function submitHandler()
    {
        $this->validate();
        Room::create([
            'number'=>$this->number,
            'status_id'=>$this->status_id,
            'floor_id'=>$this->floor_id,
            'branch_id'=>auth()->user()->branch_id,
        ]);
        $this->reset([
            'number','status_id','floor_id',
        ]);
        $this->create_room_modal=false;
        $this->notification([
            'title'=>'Success',
            'description'=>'Room created successfully',
            'icon'=>'success',
        ]);
        activity()->log('Added a new room');
        $this->emit('refreshList');
    }
}

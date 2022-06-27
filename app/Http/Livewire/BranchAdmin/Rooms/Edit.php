<?php

namespace App\Http\Livewire\BranchAdmin\Rooms;

use Livewire\Component;
use App\Models\{Room,Branch};
use WireUi\Traits\Actions;
class Edit extends Component
{
    use Actions;
    // --inputs
    public $number,$status_id,$floor_id;
    // --
    // --actions
    public $edit_room_modal=false;
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
    // --
    // --listeners
    protected $listeners = ['edit_room'=>'edit_room_handler'];
    public function render()
    {
        return view('livewire.branch-admin.rooms.edit');
    }

    public function edit_room_handler($id)
    {
        $this->edit_room_modal=true;
        $this->selected_room=Room::where('id',$id)->first();
        $this->number = $this->selected_room->number;
        $this->status_id = $this->selected_room->status_id;
        $this->floor_id = $this->selected_room->floor_id;
    }
    public function submitHandler()
    {
        $this->validate();
        $this->selected_room->update([
            'number'=>$this->number,
            'status_id'=>$this->status_id,
            'floor_id'=>$this->floor_id,
        ]);
        $this->reset([
            'number',
            'status_id',
            'floor_id',
        ]);
        $this->edit_room_modal=false;
        $this->notification([
            'title'=>'Success',
            'description'=>'Rate updated successfully',
            'icon'=>'success',
        ]);
        activity()->log('Updated a Room');
        $this->emit('refreshList');
    }
}

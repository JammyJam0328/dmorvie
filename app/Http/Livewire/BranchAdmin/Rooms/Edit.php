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
    protected $listeners = ['refreshList'=>'$refresh'];
    public function render()
    {
        return view('livewire.branch-admin.rooms.edit');
    }
}

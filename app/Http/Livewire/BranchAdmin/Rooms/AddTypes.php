<?php

namespace App\Http\Livewire\BranchAdmin\Rooms;

use Livewire\Component;
use App\Models\{Room,Branch,RoomType,RoomRate,Rate};
use WireUi\Traits\Actions;

class AddTypes extends Component
{
    use Actions;
    // --inputs
    public $selected_room_id,$selected_type_id;
    // --
    // --actions
    public $add_types_modal=false;
    // --
    // --arrays
    public $types = [],$roomTypes=[];
    // --
    // --listeners
    protected $listeners = ['add_types'=>'add_types_handler'];

    public function render()
    {
        $this->roomTypes = $this->selected_room_id ?  RoomType::where('room_id',$this->selected_room_id)->with(['type'])->get() : [];
        return view('livewire.branch-admin.rooms.add-types');
    }
    public function add_types_handler($id)
    {
        $this->selected_room_id=$id;
        $this->add_types_modal=true;
    }

    public function updatedSelectedTypeId()
    {
        // if already added, alert and return
        if($this->roomTypes->where('type_id',$this->selected_type_id)->count()){
            $this->notification([
                'title'=>'Error',
                'description'=>'Type already added',
                'icon'=>'error',
            ]);
            return;
        }
        // if not added, add
        RoomType::create([
            'room_id'=>$this->selected_room_id,
            'type_id'=>$this->selected_type_id,
        ]);
        $rates = Rate::where('branch_id',auth()->user()->branch_id)->get();
        foreach($rates as $rate){
            RoomRate::create([
                'room_id'=>$this->selected_room_id,
                'rate_id'=>$rate->id,
            ]);
        }
        $this->notification([
            'title'=>'Success',
            'description'=>'Type added',
            'icon'=>'success',
        ]);
        $this->selected_type_id='';
    }

    public function removeType($id)
    {
        RoomType::find($id)->delete();
        $this->notification([
            'title'=>'Success',
            'description'=>'Type removed',
            'icon'=>'success',
        ]);
    }
}

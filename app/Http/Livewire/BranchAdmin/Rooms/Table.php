<?php

namespace App\Http\Livewire\BranchAdmin\Rooms;

use Livewire\Component;
use App\Models\{Room,Branch};
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class Table extends Component
{
    use WithPagination, Actions;
    // --actions
    public $action_modal=false;
    public $search='',$selected_room_id;
    // --
    // --listeners
    protected $listeners = ['refreshList'=>'$refresh'];
    // --
    public function render()
    {
        return view('livewire.branch-admin.rooms.table',[
            'rooms' => Room::query()
                            ->where('number','like','%'.$this->search.'%')
                            ->with(['status'=>function($query){
                                $query->select('id','name');
                            },'floor'=>function($query){
                                $query->select('id','number');
                            }])
                            ->paginate(10)
        ]);
    }

    public function invoke_action($id)
    {
        $this->selected_room_id=$id;
        $this->action_modal=true;
    }
    public function edit_action()
    {
        if($this->selected_room_id){
            $this->emit('edit_room',$this->selected_room_id);
        }
        $this->action_modal=false;
    }

    public function delete_action()
    {
        if($this->selected_room_id){
            $this->dialog()->confirm([
                'title'       => 'Are you Sure?',
                'description' => 'You are about to delete this room',
                'icon'        => 'question',
                'accept'      => [
                    'label'  => 'Yes, delete it',
                    'method' => 'confirmDelete',
                ],
                'reject' => [
                    'label'  => 'No, cancel',
                ],
            ]);
        }
        $this->action_modal=false;
    }

    public function confirmDelete()
    {
        $room = Room::where('id',$this->selected_room_id)->first();
        $room->delete();

        $this->notification([
            'title'=>'Success',
            'description'=>'Room deleted successfully',
            'icon'=>'success'
        ]);
        $this->action_modal=false;
    }

    public function add_type_action()
    {
        if($this->selected_room_id){
            $this->emit('add_types',$this->selected_room_id);
        }
        $this->action_modal=false;
    }

    public function add_rate_action()
    {
        if($this->selected_room_id){
            $this->emit('add_rates',$this->selected_room_id);
        }
        $this->action_modal=false;
    }
}

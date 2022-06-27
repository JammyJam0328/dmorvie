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
}

<?php

namespace App\Http\Livewire\BranchAdmin\Rooms;

use Livewire\Component;
use App\Models\{Room,Branch};
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class View extends Component
{
    use WithPagination, Actions;
    // --actions
    public $view_room_modal=false;
    // --
    // --listeners
    protected $listeners = ['view_room'=>'view_room_handler'];
    // --
    // --inputs
    public $selected_room_id;
    // --
    // --arrays
    public $types = [];
    // --
    public function render()
    {
        return view('livewire.branch-admin.rooms.view');
    }
    public function view_room_handler($id)
    {
        $this->selected_room_id=$id;
        $this->view_room_modal=true;
    }
}

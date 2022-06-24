<?php

namespace App\Http\Livewire\SuperAdmin\Branches;

use Livewire\Component;
use App\Models\Branch;
use Livewire\WithPagination;
class Table extends Component
{
    use WithPagination;
    protected $listeners = ['refreshList'=>'$refresh'];
    // actions
    public $action_modal=false;
    // inputs
    public $search='',$selected_branch_id;

    public function render()
    {
        return view('livewire.super-admin.branches.table',[
            'branches'=>Branch::where('name','like','%'.$this->search.'%')->paginate(10)
        ]);
    }
    public function invoke_action($id)
    {
        $this->selected_branch_id=$id;
        $this->action_modal=true;
    }
}

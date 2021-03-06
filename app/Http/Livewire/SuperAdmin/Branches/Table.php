<?php

namespace App\Http\Livewire\SuperAdmin\Branches;

use Livewire\Component;
use App\Models\Branch;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class Table extends Component
{
    use WithPagination, Actions;
    protected $listeners = ['refreshList'=>'$refresh'];
    public $action_modal=false;
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

    public function edit_action()
    {
        if ($this->selected_branch_id) {
            $this->emit('edit_branch',$this->selected_branch_id);
        }
        $this->action_modal=false;
    }

    public function delete_action()
    {
        if ($this->selected_branch_id) {
            $this->dialog()->confirm([
                'title'       => 'Are you Sure?',
                'description' => 'You are about to delete this branch',
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
        $branch = Branch::where('id',$this->selected_branch_id)->first();
        $branch->delete();

        $this->notification([
            'title'=>'Success',
            'description'=>'Branch deleted successfully',
            'icon'=>'success'
        ]);
    }
}

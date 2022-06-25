<?php

namespace App\Http\Livewire\SuperAdmin\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class Table extends Component
{
    use WithPagination, Actions;
    protected $listeners = ['refreshList'=>'$refresh'];
    public $action_modal=false;
    public $search='',$selected_user_id;
    public $branches=[];
    public $branchFilter='';


    public function render()
    {
        return view('livewire.super-admin.users.table',[
            'users'=>User::query()
                        ->where('name','like','%'.$this->search.'%')
                        ->when($this->branchFilter,function($query){
                            return $query->where('branch_id',$this->branchFilter);
                        })
                        ->with(['role'])
                        ->paginate(10)
        ]);
    }
    public function invoke_action($id)
    {
        $this->selected_user_id=$id;
        $this->action_modal=true;
    }

    public function edit_action()
    {
        if ($this->selected_user_id) {
            $this->emit('edit_user',$this->selected_user_id);
        }
        $this->action_modal=false;
    }

    public function delete_action()
    {
        if ($this->selected_user_id) {
            $this->dialog()->confirm([
                'title'       => 'Are you Sure?',
                'description' => 'You are about to delete this user',
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
        $user = User::where('id',$this->selected_user_id)->first();
        $user->delete();

        $this->notification([
            'title'=>'Success',
            'description'=>'User deleted successfully',
            'icon'=>'success'
        ]);
    }

}

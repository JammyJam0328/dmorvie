<?php

namespace App\Http\Livewire\BranchAdmin\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class Table extends Component
{
    use WithPagination, Actions;
    // --inputs 
    public $name, $email, $password,$role_id, $branch_id;
    public $search='',$selected_user_id;
    // --
    // --actions
    public $action_modal=false;
    // --
    // --listeners
    protected $listeners = ['refreshList' => '$refresh'];
    // --
    public function render()
    {
        return view('livewire.branch-admin.users.table',[
            'users'=>User::query()
                        ->where('name','like','%'.$this->search.'%')
                        ->where('branch_id',auth()->user()->branch_id)
                        ->with(['role'])
                        ->paginate(10),
        ]);
    }

    public function invoke_action($id)
    {
        $this->selected_user_id=$id;
        $this->action_modal=true;
    }

    public function edit_action()
    {
        if($this->selected_user_id){
            $this->emit('edit_user',$this->selected_user_id);
        }
        $this->action_modal=false;
    }

    public function delete_action()
    {
        if($this->selected_user_id){
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
    }

    public function confirmDelete()
    {
        $user = User::where('id',$this->selected_user_id)->first();
        $user->delete();
        $this->notification([
            'title' => 'User Deleted',
            'description' => 'User has been deleted successfully',
            'icon' => 'success',
        ]);
        $this->action_modal=false;
    }

}

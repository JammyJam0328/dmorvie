<?php

namespace App\Http\Livewire\BranchAdmin\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
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
}

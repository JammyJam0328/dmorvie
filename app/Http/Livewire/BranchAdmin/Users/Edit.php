<?php

namespace App\Http\Livewire\BranchAdmin\Users;

use Livewire\Component;
use App\Models\User;
use WireUi\Traits\Actions;
class Edit extends Component
{
    use Actions;
    // --inputs
    public $name, $email,$role_id;
    // --
    // --actions
    public $edit_user_modal=false;
    // --
    // --arrays
    public $roles=[];
    // --
    // --validation
    protected $rules=[
        'name'=>'required|string|max:255',
        'email'=>'required|string|max:255|email',
        'role_id'=>'required',
    ];
    // --
    // --listeners
    protected $listeners = ['edit_user'=>'edit_user_handler'];
    public function render()
    {
        return view('livewire.branch-admin.users.edit');
    }

    public function edit_user_handler($id)
    {
        $this->user = User::find($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->role_id = $this->user->role_id;
        $this->edit_user_modal=true;
    }

    public function submitHandler()
    {
        $this->validate();
        $this->user->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'role_id'=>$this->role_id,
        ]);
        $this->reset([
            'name','email','role_id','edit_user_modal'
        ]);
        $this->notification([
            'title'=>'Success',
            'description'=>'User updated successfully',
            'icon'=>'success',
        ]);
        activity()->log('Updated a user');
        $this->emit('refreshList');
    }
}

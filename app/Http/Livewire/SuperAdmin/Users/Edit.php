<?php

namespace App\Http\Livewire\SuperAdmin\Users;

use Livewire\Component;
use App\Models\{User,Role,Branch};
use WireUi\Traits\Actions;
class Edit extends Component
{
    use Actions;
    public $name,$email,$password,$role_id,$branch_id;
    public $edit_user_modal=false;
    protected $rules=[
        'name'=>'required|string|max:255',
        'email'=>'required|string|max:255|email',
        'role_id'=>'required',
        'branch_id'=>'nullable',
    ];
    protected $listeners = ['edit_user'=>'edit_user_handler'];
    protected $validationAttributes = ['role_id'=>'role','branch_id'=>'branch'];
    public $roles=[],$branches=[];
    public $selected_user;
    public function render()
    {
        return view('livewire.super-admin.users.edit');
    }

    public function edit_user_handler($id)
    {
        $this->selected_user=User::where('id',$id)->first();
        $this->name = $this->selected_user->name;
        $this->email = $this->selected_user->email;
        $this->role_id = $this->selected_user->role_id;
        $this->branch_id = $this->selected_user->branch_id;
        $this->edit_user_modal=true;
    }

    public function submitHandler()
    {
        $this->validate();
        $this->selected_user->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'role_id'=>$this->role_id,
            'branch_id'=>$this->branch_id,
        ]);
        $this->edit_user_modal=false;
        $this->notification([
            'title'=>'Success',
            'description'=>'User updated successfully',
            'icon'=>'success',
        ]);
        $this->emit('refreshList');
    }
}

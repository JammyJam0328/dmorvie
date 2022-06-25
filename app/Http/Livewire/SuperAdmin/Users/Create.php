<?php

namespace App\Http\Livewire\SuperAdmin\Users;

use Livewire\Component;
use App\Models\{User,Role,Branch};
use WireUi\Traits\Actions;
class Create extends Component
{
    use Actions;
    public $name,$email,$password,$role_id,$branch_id;
    public $create_user_modal=false;
    protected $rules=[
        'name'=>'required|string|max:255',
        'email'=>'required|string|max:255|email',
        'password'=>'required',
        'role_id'=>'required',
        'branch_id'=>'nullable',
    ];
    protected $validationAttributes = ['role_id'=>'role','branch_id'=>'branch'];
    public $roles=[],$branches=[];
    public function render()
    {
        return view('livewire.super-admin.users.create');
    }

    public function submitHandler()
    {
        $this->validate();
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password),
            'role_id'=>$this->role_id,
            'branch_id'=>$this->branch_id,
        ]);
        $this->reset();
        $this->notification([
            'title'=>'Success',
            'description'=>'User created successfully',
            'icon'=>'success',
        ]);
        $this->emit('refreshList');
    }
}

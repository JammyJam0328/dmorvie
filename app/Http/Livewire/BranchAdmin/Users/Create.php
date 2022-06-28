<?php

namespace App\Http\Livewire\BranchAdmin\Users;

use Livewire\Component;
use App\Models\User;
use WireUi\Traits\Actions;
class Create extends Component
{
    use Actions;
    // --inputs
    public $name, $email, $password,$role_id;
    // --
    // --actions
    public $create_user_modal=false;
    // --
    // --arrays
    public $roles=[];
    // --
    // --validation
    protected $rules=[
        'name'=>'required|string|max:255',
        'email'=>'required|string|max:255|email',
        'password'=>'required',
        'role_id'=>'required',
    ];
    public function render()
    {
        return view('livewire.branch-admin.users.create');
    }

    public function submitHandler()
    {
        $this->validate();
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password),
            'role_id'=>$this->role_id,
            'branch_id'=>auth()->user()->branch_id,
        ]);
        $this->reset([
            'name','email','password','role_id',
        ]);
        $this->create_user_modal=false;
        $this->notification([
            'title'=>'Success',
            'description'=>'User created successfully',
            'icon'=>'success',
        ]);
        activity()->log('Created a new user');
        $this->emit('refreshList');
    }
}

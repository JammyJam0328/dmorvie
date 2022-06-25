<?php

namespace App\Http\Livewire\SuperAdmin\Branches;

use Livewire\Component;
use App\Models\Branch;
use WireUi\Traits\Actions;
class Edit extends Component
{
    use Actions;
    public $name, $address,$telephone ,$cellphone, $email;
    public $password;
    public $edit_branch_modal=false;
    public $selected_branch;
    protected $listeners = ['edit_branch'=>'edit_branch_handler'];
    protected $rules=[
        'name'=>'required|string|max:255',
        'address'=>'required|string|max:255',
        'telephone'=>'required|string',
        'cellphone'=>'required|string|max:255|digits:11',
        'email'=>'required|string|max:255|email',
        'password'=>'required',
    ];
    public function render()
    {
        return view('livewire.super-admin.branches.edit');
    }

    public function edit_branch_handler($id)
    {
        $this->selected_branch=Branch::where('id',$id)->first();
        $this->name = $this->selected_branch->name;
        $this->address = $this->selected_branch->address;
        $this->telephone = $this->selected_branch->telephone;
        $this->cellphone = $this->selected_branch->cellphone;
        $this->email = $this->selected_branch->email;
        $this->edit_branch_modal=true;
    }
    protected function confirm_password()
    {
        if (\Hash::check($this->password, auth()->user()->password)) {
            return true;
        }else{
            $this->notification([
                'title'=>'Error',
                'description'=>'Password does not match',
                'icon'=>'error'
            ]);
            return false;
        }
    }
    public function submitHandler()
    {
        if ($this->confirm_password()) {
            $this->selected_branch->update([
                'name'=>$this->name,
                'address'=>$this->address,
                'telephone'=>$this->telephone,
                'cellphone'=>$this->cellphone,
                'email'=>$this->email,
            ]);
            $this->edit_branch_modal=false;
            $this->notification([
                'title'=>'Success',
                'description'=>'Branch updated successfully',
                'icon'=>'success'
            ]);
            $this->reset();
            $this->emit('refreshList');
        }
    }
}

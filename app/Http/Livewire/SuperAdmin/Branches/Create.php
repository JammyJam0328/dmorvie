<?php

namespace App\Http\Livewire\SuperAdmin\Branches;

use Livewire\Component;
use App\Models\Branch;
use WireUi\Traits\Actions;
class Create extends Component
{
    use Actions;
    public $name, $address, $telephone,$cellphone, $email;
    public $create_branch_modal=false;
    protected $rules=[
        'name'=>'required|string|max:255',
        'address'=>'required|string|max:255',
        'telephone'=>'required|string',
        'cellphone'=>'required|string|digits:11',
        'email'=>'required|string|max:255|email',
    ];
    public function render()
    {
        return view('livewire.super-admin.branches.create');
    }

    public function submitHandler()
    {
        $this->validate();
        Branch::create([
            'name'=>$this->name,
            'address'=>$this->address,
            'telephone'=>$this->telephone,
            'cellphone'=>$this->cellphone,
            'email'=>$this->email,
        ]);

        $this->reset();
        $this->notification([
            'title'=>'Success',
            'description'=>'Branch created successfully',
            'icon'=>'success',
        ]);
        $this->emit('refreshList');
    }
}

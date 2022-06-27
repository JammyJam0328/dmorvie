<?php

namespace App\Http\Livewire\BranchAdmin\Inhouse;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class Table extends Component
{
    use WithPagination, Actions;
    public function render()
    {
        return view('livewire.branch-admin.inhouse.table',[
            'customers' => Customer::query()
                            ->where('branch_id',auth()->user()->branch_id)
                            ->where('check_out_time',null)
                            ->with(['room'=>function($query){
                                $query->select('id','number');
                            }])
                            ->paginate(10)
        ]);
    }
}

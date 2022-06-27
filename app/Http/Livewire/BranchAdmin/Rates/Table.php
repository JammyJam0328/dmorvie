<?php

namespace App\Http\Livewire\BranchAdmin\Rates;

use Livewire\Component;
use App\Models\{Rate,Branch};
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class Table extends Component
{
    use WithPagination, Actions;
    // --actions
    public $action_modal=false;
    public $search='',$selected_rate_id;
    // --
    // --listeners
    protected $listeners = ['refreshList'=>'$refresh'];
    // --
    public function render()
    {
        return view('livewire.branch-admin.rates.table',[
            'rates' => Rate::query()
                            ->where('price','like','%'.$this->search.'%')
                            ->orWhere('description','like','%'.$this->search.'%')
                            ->where('branch_id',auth()->user()->branch_id)
                            ->with(['type'])
                            ->paginate(10)
        ]);
    }
    public function invoke_action($id)
    {
        $this->selected_rate_id=$id;
        $this->action_modal=true;
    }

    public function edit_action()
    {
        if ($this->selected_rate_id) {
            $this->emit('edit_rate',$this->selected_rate_id);
        }
        $this->action_modal=false;
    }
    public function delete_action()
    {
        if ($this->selected_rate_id) {
            $this->dialog()->confirm([
                'title'       => 'Are you Sure?',
                'description' => 'You are about to delete this rate',
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
        $rate = Rate::where('id',$this->selected_rate_id)->first();
        $rate->delete();

        $this->notification([
            'title'=>'Success',
            'description'=>'Rate deleted successfully',
            'icon'=>'success'
        ]);
        activity()->log('Deleted a rate');
        $this->action_modal=false;
    }
}

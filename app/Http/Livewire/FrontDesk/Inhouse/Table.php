<?php

namespace App\Http\Livewire\FrontDesk\Inhouse;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class Table extends Component
{
    use WithPagination, Actions;
    public $search='';
    public $check_out_modal=false;
    public $selected_customer;
    public function render()
    {
        return view('livewire.front-desk.inhouse.table',[
            'customers'=>Customer::query()
                                    ->where('check_out_time',null)
                                    ->when($this->search,function($query){
                                        $query->where('qr_code',$this->search);
                                    })
                                    ->where('branch_id',auth()->user()->branch_id)
                                    ->with(['check_in_detail.room'])
                                    ->orderBy('id','desc')
                                    ->paginate(10),
        ]);
    }

    public function openDetails($id)
    {
        $this->selected_customer = Customer::query()
                                            ->where('id',$id)
                                            ->with(['check_in_detail.room','transactions.transaction_type'])
                                            ->first();
        $this->check_out_modal=true;
    }

    public function payAndCheckOut()
    {
        $this->selected_customer->transactions->where('paid_at',null)->each(function($transaction){
            $transaction->paid_at=now();
            $transaction->save();
        });

        $this->selected_customer->check_in_detail->room->status_id = 3;
        $this->selected_customer->check_in_detail->room->save();

        $this->selected_customer->check_out_time=now();
        $this->selected_customer->save();
        $this->check_out_modal=false;

        $this->notification([
            'title'=>'Success',
            'description'=>'Customer checked out',
            'icon'=>'success',
        ]);
    }

    public function checkout()
    {
        $this->selected_customer->check_out_time=now();
        $this->selected_customer->save();
        $this->selected_customer->check_in_detail->room->status_id = 3;
        $this->selected_customer->check_in_detail->room->save();
        $this->notification([
            'title'=>'Success',
            'description'=>'Customer checked out',
            'icon'=>'success',
        ]);

        $this->check_out_modal=false;
    }
}

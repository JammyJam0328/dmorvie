<?php

namespace App\Http\Livewire\FrontDesk\CheckIn;

use Livewire\Component;
use App\Models\{Customer,Transaction};
use WireUi\Traits\Actions;
class ViewDetails extends Component
{
    use Actions;
    public $qr_code='';
    public $customer=null;
    public function render()
    {
        return view('livewire.front-desk.check-in.view-details');
    }

    public function updatedQrCode()
    {
        if ($this->qr_code!='') {
            $this->customer = Customer::query()
                                                ->where('qr_code',$this->qr_code)
                                                ->with(['transactions.transaction_type'])
                                                ->first();
        }else{
            $this->customer = null;
        }
    }

    public function payAll()
    {
        $this->dialog()->confirm([
                'title'       => 'Are you Sure?',
                'description' => 'You are about to mark all the transactions as paid and check in the customer',
                'icon'        => 'question',
                'accept'      => [
                    'label'  => 'Yes, continue checking in',
                    'method' => 'payAllConfirmed',
                ],
                'reject' => [
                    'label'  => 'No, cancel',
                ],
        ]);
    }

    public function payAllConfirmed()
    {
        $this->customer->transactions->each(function($transaction){
            $transaction->paid_at = now();
            $transaction->save();
        });
        $this->customer->check_in_time = now();
        $this->customer->save();
        $this->notification([
            'title'=>'Check In Successful',
            'description'=>'The customer has been checked in successfully',
            'icon'=>'success',
        ]);
        $this->customer->check_in_detail->room->update([
            'status_id'=>2,
        ]);
        $this->qr_code='';
        $this->customer=null;
        $this->emit('refreshList');
    }
}

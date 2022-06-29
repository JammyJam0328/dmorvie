<?php

namespace App\Http\Livewire\FrontDesk\CheckIn;

use Livewire\Component;
use App\Models\{Customer,Transaction};
class ViewDetails extends Component
{
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
}

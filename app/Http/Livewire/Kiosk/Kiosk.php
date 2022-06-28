<?php

namespace App\Http\Livewire\Kiosk;

use Livewire\Component;
use App\Models\Type;
use App\Models\Rate;

class Kiosk extends Component
{
    public $step = 1;
    public $transaction;
    public $customer_transaction = [];
    public $openRoom = false;
    public function render()
    {
        return view('livewire.kiosk.kiosk', [
            'types' => Type::where('branch_id', auth()->user()->branch_id)->get(),
            'rates' => 
        ]);
    }


    public function selectHours($hours){
        $this->customer_transaction['hours'] = $hours;
        $this->step = 3;
        
    }

    public function selectRoomType($roomtype){
        $this->customer_transaction['roomtype'] = $roomtype;
        $this->step = 2;    
    }

    public function closeTransaction(){
        $this->step = 1;
        $this->transaction = null;
    }

    public function selectRoom(){
        $this->openRoom = true;
    }
}

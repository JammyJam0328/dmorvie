<?php

namespace App\Http\Livewire\Kiosk;

use Livewire\Component;
use App\Models\Type;
use App\Models\Rate;
use App\Models\Room;

class Kiosk extends Component
{
    public $step = 1;
    public $transaction;
    public $customer_transaction = [
        'roomtype' => '',
    ];
    public $openRoom = false;
    public function render()
    {
        return view('livewire.kiosk.kiosk', [
            'types' => Type::where('branch_id', auth()->user()->branch_id)->get(),
            'rooms' =>$this->customer_transaction['roomtype'] ?  Room::whereHas('room_types', function($q){
               return  $q->where('type_id', $this->customer_transaction['roomtype']);
            })->get() : [],
        ]);
    }


    public function selectHours($hours){
        $this->customer_transaction['hours'] = $hours;
        $this->step = 4;
        
    }

    public function selectRoomType($roomtype){
        $this->customer_transaction['roomtype'] = $roomtype;
        $this->step = 2;    
    }

    public function closeTransaction(){
        $this->step = 1;
        $this->transaction = null;
    }

    public function selectRoom($id){
        $this->customer_transaction['room_id'] = $id;
        $this->step = 3;
    }
}

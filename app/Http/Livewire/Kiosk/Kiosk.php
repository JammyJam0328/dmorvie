<?php

namespace App\Http\Livewire\Kiosk;

use App\Models\CheckInDetail;
use Livewire\Component;
use App\Models\Type;
use App\Models\Rate;
use App\Models\Room;
use App\Models\RoomRate;
use App\Models\Customer;
use App\Models\Transaction;
use Carbon\Carbon;

class Kiosk extends Component
{
    public $step = 1;
    public $transaction;
    public $complete_name;
    public $code;
    public $customer_transaction = [
        'roomtype' => '',
        'room_id' => '',
    ];
    public $openRoom = false;
    public function render()
    {
        return view('livewire.kiosk.kiosk', [
            'types' => Type::where('branch_id', auth()->user()->branch_id)->get(),
            'rooms' =>$this->customer_transaction['roomtype'] ?  Room::whereHas('room_types', function($q){
               return  $q->where('type_id', $this->customer_transaction['roomtype']);
            })->get() : [],
            'rates' => $this->customer_transaction['room_id'] ? RoomRate::where('room_id', $this->customer_transaction['room_id'])->whereHas('rate', function($q){
                return $q->where('type_id', $this->customer_transaction['roomtype']);
            
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

    public function confirmCheckIn(){

        $transaction = Customer::whereDate('created_at', Carbon::today())->count();
        $transaction += 1;
        $transaction_code = Carbon::today()->format('Ymd') . '' . $transaction;
        $transaction_code *= 1000;
        $transaction_code += $transaction;

        $rate = RoomRate::where('id',$this->customer_transaction['hours'])->first();
        $room = Room::where('id',$this->customer_transaction['room_id'])->first();
        $room_type = Type::where('id',$this->customer_transaction['roomtype'])->first()->name;
        // dd($room->room_type);

        $customer = Customer::create([
            'branch_id' => auth()->user()->branch_id,
            'qr_code' => $transaction_code,
            'name' => $this->complete_name,
            'check_in_time' => Carbon::now(),
        ]);

        $trans = Transaction::create([
            'transaction_type_id' => 1,
            'branch_id' => auth()->user()->branch_id,
            'customer_id' => $customer->id,
            'amount' => $rate->rate->price,
        ]);
        $transs = Transaction::create([
            'transaction_type_id' => 2,
            'branch_id' => auth()->user()->branch_id,
            'customer_id' => $customer->id,
            'amount' => 200,
        ]);

        $details = CheckInDetail::create([
            'customer_id' => $customer->id,
            'room_id' => $room->id,
            'room_type' => $room_type,
            'hours' => $rate->rate->hours,
        ]);

        $this->code = $transaction_code;
        $this->step = 5;
    }
}

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
    public $scan;
    public $checkOut_step = 1;
    public $customer_transaction = [
        'roomtype' => '',
        'room_id' => '',
    ];
    public $openRoom = false;
    public function render()
    {
        return view('livewire.kiosk.kiosk', [
            'types' => Type::where('branch_id', auth()->user()->branch_id)->get(),
            'rooms' =>$this->customer_transaction['roomtype'] ?  Room::where('status_id',1)->whereHas('room_types', function($q){
               return  $q->where('type_id', $this->customer_transaction['roomtype']);
            })->get() : [],
            'rates' => $this->customer_transaction['room_id'] ? RoomRate::where('room_id', $this->customer_transaction['room_id'])->whereHas('rate', function($q){
                return $q->where('type_id', $this->customer_transaction['roomtype']);
            })->get() : [],
            'transactions' => Transaction::where('branch_id', auth()->user()->branch_id)->whereHas('customer', function($q){
                return $q->where('qr_code', '=', $this->scan);
            })->get(),
           
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
            'amount' => $trans->amount + $transs->amount,
            'hours' => $rate->rate->hours,
        ]);

        $room->update([
            'status_id' => 5,
        ]);
        $this->code = $transaction_code;
        $this->step = 5;
    }

    public function updatedScan(){
        $this->checkOut_step = 2;
    }

    public function checkOut(){

        $data = Transaction::where('branch_id', auth()->user()->branch_id)->whereHas('customer', function($q){
            return $q->where('qr_code', '=', $this->scan);
        })->get();
        $data->first()->customer->update([
            'check_out_time' => Carbon::now(),
        ]);

        $data->first()->customer->check_in_detail->room->update([
            'status_id' => 3,
        ]);

       $this->transaction = null;
        $this->checkOut_step = 1;
    }
}

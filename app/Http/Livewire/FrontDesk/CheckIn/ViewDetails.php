<?php

namespace App\Http\Livewire\FrontDesk\CheckIn;

use Livewire\Component;

class ViewDetails extends Component
{
    public $qr_code='';
    protected $listeners = ['search_qr' => 'search_qr'];
    public function render()
    {
        return view('livewire.front-desk.check-in.view-details');
    }
    
    public function search_qr($qr)
    {
        $this->qr_code=$qr;
    }
}

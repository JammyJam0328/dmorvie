<?php

namespace App\Http\Livewire\FrontDesk\CheckIn;

use Livewire\Component;

class QrCodeScanner extends Component
{
    public $qr_code='';
    public function render()
    {
        return view('livewire.front-desk.check-in.qr-code-scanner');
    }

    public function qrCodeChanged($qr)
    {
        $this->qr_code=$qr;
    }
}

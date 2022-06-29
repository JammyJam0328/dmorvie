<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function check_in_detail()
    {
        return $this->hasOne(CheckInDetail::class);
    }
}

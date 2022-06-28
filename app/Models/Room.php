<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function room_rates()
    {
        return $this->hasMany(RoomRate::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
    public function room_types()
    {
        return $this->hasMany(RoomType::class);
    }
    
}

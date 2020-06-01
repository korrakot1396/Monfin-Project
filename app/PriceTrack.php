<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceTrack extends Model
{
    protected $fillable = ['room_category_id', 'new_price', 'current_price','reason'];

    public function room_category()
    {
        return $this->belongsTo(RoomCategory::class);
    }
}

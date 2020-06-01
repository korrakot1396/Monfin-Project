<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = ['user_id', 'room_category_id', 'zone', 'price_room'];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room_category()
    {
        return $this->belongsTo(RoomCategory::class);
    }

    public function isAvailable($start_date, $end_date)
    {
        $detail = $this->details()
            ->where('checkin_date', "<", $end_date)
            ->where('checkout_date', '>', $start_date)
            ->first();
        if (!$detail) return true;
        return false;
    }
}

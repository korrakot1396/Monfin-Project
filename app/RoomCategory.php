<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{

    protected $fillable = ['name', 'price', 'image'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function pricetracks()
    {
        return $this->hasMany(PriceTrack::class);
    }

}

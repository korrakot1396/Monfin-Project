<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description', 'checkin_date', 'checkout_date'];

    public function details() {
        return $this->belongsTo(Detail::class);
    }
}

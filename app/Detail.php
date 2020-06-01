<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $dates = ['checkin_date', 'checkout_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function getNightStayAttribute() {
        return $this->checkin_date->diffInDays($this->checkout_date);
    }

    public function getTotalPriceAttribute() {
        return $this->price_room*$this->checkin_date->diffInDays($this->checkout_date);
    }

    public function getTotaleAttribute() {
        return 0;
    }




    public function payment()
    {
        return $this->hasMany(Payment::class);
    }


    public function scopeDetailPaid($query)
    {
        $query->where('status', 'ชำระเงินแล้ว');
    }
    public function scopeDetailNotPaid($query)
    {
        $query->where('status', 'ยังไม่ได้ชำระเงิน');
    }




}

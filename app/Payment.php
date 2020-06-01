<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $fillable = [ 'user_id', 'net_price','vat_price','total_price','image','detail_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }

    public function scopeDetailPaid($query) {
        return $query->whereHas('detail', function ($q) {
            $q->where('status', 'ชำระเงินแล้ว');
        });
    }
    public function scopeDetailNotPaid($query) {
        return $query->whereHas('detail', function ($q) {
            $q->where('status', 'ยังไม่ได้ชำระเงิน');
        });
    }
}

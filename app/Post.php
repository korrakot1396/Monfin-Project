<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'detail', 'view_count','user_id'];

    

    public function user() {
        return $this->belongsTo(User::class);
        }
}

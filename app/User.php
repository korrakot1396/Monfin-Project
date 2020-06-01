<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','username','telephone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }


    public function details() {
        return $this->hasMany(Detail::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }


    public function isAdmin(){
        return $this->role === 'ADMIN';
    }

    public function isUser(){
        return $this->role === 'USER';
    }

    public function getProfileImageAttribute() {
        return $this->image ? $this->image : 'https://www.gravatar.com/avatar/?d=mp';
    }

    public function review()
    {
        return $this->hasOne(ProductReview::class);
    }

}

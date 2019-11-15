<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'name', 'phone','email','bio', 'profile_picture'
    ];

    public function album(){
        return $this->hasMany('App\Album','user_id');
    }
}

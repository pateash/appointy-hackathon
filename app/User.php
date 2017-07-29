<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Order;

class User extends Authenticatable
{
    protected $hidden=['password','remember_token','updated_at'];
    public function orders(){
        return $this->hasMany(Order::class);
    }
}

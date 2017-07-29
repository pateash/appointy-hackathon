<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Agent;
class Order extends Model
{
    protected $hidden=['created_at','updated_at'];

    public function scopeReturns(){
        return Order::where('returnPlaced','=','1');
    }

    public function agent(){
        return $this->belongsTo(Agent::class);
    }

}


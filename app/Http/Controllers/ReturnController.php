<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Agent;

class ReturnController extends Controller
{
    /*
     * return id
     *  0- return not placed
     *  1- return placed but not completed
     *  2- return completed
     */
    public function show(){
        return Order::returns()->get();
    }

    public function place(Order $order){

        if($order->returnPlaced==1) //if already placed, then return error
            return ['error'=>['Return Order  with this Order id is already Placed']];

        //find appropriate user, who is free or nearest
        $order->agent_id=Agent::findAgent($order);
        $order->returnPlaced=1;
        $order->save();

        $agent=Agent::find($order->agent_id);
        $agent->free=0;//not this user is not free
        $agent->save();
        return $order;
    }

    public function complete(Order $order){

        if($order->returnPlaced==2)
            return ['error'=>['This Return Order Already Completed']];

        if($order->returnPlaced==0)
            return ['error'=>['No Return Order Placed with this Order Id']];

        $order->returnPlaced=2;

        //we have to somehow remove those orders from agent list which has been complete
        // which will be doing by just finding orders with returnPlace!=2;
        $order->save();
        return $order;
    }

    public function details($id){
        $details=Order::returns()->find($id);
        if($details!=null)
            return $details;
        else return ['error'=>['No Return Order Placed with this Order Id']];

    }
}


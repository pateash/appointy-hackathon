<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
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

        if($order->returnPlaced==1)
            return ['error'=>['Return Order  with this Order id is already Placed']];

        $order->returnPlaced=1;

        //TODO: find agent id
        $order->agent_id=0;

        $order->save();
        return $order;
    }

    public function complete(Order $order){
        if($order->returnPlaced==2)
            return ['error'=>['This Return Order Already Completed']];

        if($order->returnPlaced==0)
            return ['error'=>['No Return Order Placed with this Order Id']];
        $order->returnPlaced=2;
        $order->save();
        return $order;
    }

    public function details($id){
        $details=Order::returns()->find($id);
        if($details!=null)
            return $details;
        else return ['error'=>['No Return Order Placed with this Order Id']];

    }


    public function agent(Order $order){
        return $order->agent;
    }
}


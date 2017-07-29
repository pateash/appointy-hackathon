<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Agent;
class OrdersController extends Controller
{


    public function show(){
        return Order::all();
    }

    public function details(Order $order){
        return $order;
    }


    public function agent(Order $order){
        return $order->agent;
    }


}

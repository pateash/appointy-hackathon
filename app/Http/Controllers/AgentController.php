<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Order;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function show()
    {
        return Agent::all();
    }
    public function details(Agent $agent)
    {
        return $agent;
    }

    public function orders(Agent $agent)
    {
        return $agent->orders;
    }
    public function freeAgents()
    {
        return Agent::where('free','=','1')->get();
    }
    public function busyAgents()
    {
        return Agent::where('free','=','0')->get();
    }


    public function returns($id)
    {
        return Order::where('agent_id','=',$id)
            ->where('returnPlaced','=',1)
            // only those which are placed , we can't take with returnPlaced=2
            // because returnPlaced=2 is being done when we complete order
            ->get();
    }

}

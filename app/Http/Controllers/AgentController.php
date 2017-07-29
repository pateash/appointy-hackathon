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
    public function returns($id)
    {
        return Order::where('agent_id','=',$id)->get();
    }

}

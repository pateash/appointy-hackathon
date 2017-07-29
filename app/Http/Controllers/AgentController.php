<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function show(Agent $agent)
    {
        return Agent::all();
    }
    public function orders(Agent $agent)
    {
        return $agent->orders;
    }
}

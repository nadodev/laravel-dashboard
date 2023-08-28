<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function Agent()
    {
        return view('agent.dashboard');
    }
}

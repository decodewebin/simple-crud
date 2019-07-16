<?php

namespace App\Http\Controllers\State;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    public function viewAddState()
    {
        return view('state.add_state');
    }
}

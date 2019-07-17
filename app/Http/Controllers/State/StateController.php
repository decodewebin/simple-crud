<?php

namespace App\Http\Controllers\State;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    public function viewAddState()
    {
        //fetch countries
        $countries = Country::getCountries();
        //pass countries in array to our view
        return view('state.add_state', ['countries' => $countries]);
    }

    public function addState(Request $request)
    {
        $country_id = $request->country_id;
        $state = $request->state;

        State::createState([
            'country_id' => $country_id,
            'state' => $state
        ]);

        return route('home');
    }
}

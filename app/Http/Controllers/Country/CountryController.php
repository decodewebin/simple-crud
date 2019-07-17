<?php

namespace App\Http\Controllers\Country;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function viewAddCountry()
    {
        return view('country.add_country');
    }

    public function addCountry(Request $request)
    {
        Country::createCountry([
            'country_name'=>$request->country
        ]);

        return route('home');
    }
}

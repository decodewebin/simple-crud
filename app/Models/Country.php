<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public static function createCountry($data)
    {
        $country = new self;
        $country->country_name = $data['country_name'];

        $country->save();

        return $country->id;
    }

    public static function getCountries()
    {
        return self::get();
    }
}

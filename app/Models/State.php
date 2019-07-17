<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public static function createState($data)
    {
        $state = new self;

        $state->country_id = $data['country_id'];
        $state->state_name = $data['state'];

        $state->save();

        return $state->id;
    }
}

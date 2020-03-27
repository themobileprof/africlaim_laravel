<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    //

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function airline()
    {
        return $this->belongsTo('App\Airline');
    }

    public function arrival()
    {
        return $this->belongsTo('App\Airport', 'arrival_id');
    }

    public function departure()
    {
        return $this->belongsTo('App\Airport', 'departure_id');
    }
}

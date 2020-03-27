<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    /*
     * Get Airports for the Country
     */
    public function airports()
    {
        return $this->hasMany('App\Airport');
    }

    /*
     * Get Airports for the Country
     */
    public function airlines()
    {
        return $this->hasMany('App\Airline');
    }
}

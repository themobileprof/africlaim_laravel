<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    //


    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /*
     * Get Claims for the Airport
     */
    public function claims()
    {
        return $this->hasMany('App\Claim');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    //


    public function country()
    {
        return $this->belongsTo('App\Country','country','cc');
    }

    /*
     * Get Claims for the Airport
     */
    public function claims()
    {
        return $this->hasMany('App\Claim');
    }
}

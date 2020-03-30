<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AirlineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'alias'=>$this->alias,
            'IATA'=>$this->IATA,
            'callsign'=>$this->callsign,
            'country'=>$this->country_id,
            'continent'=>$this->country['continent_code'],
            'active'=>$this->active
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AirportResource extends JsonResource
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
            'city'=>$this->city,
            'country'=>$this->country_id,
            'continent'=>$this->country['continent_code'],
            'IATA'=>$this->IATA
        ];
    }
}

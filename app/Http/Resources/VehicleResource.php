<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'make' => $this->make,
            'model' => $this->model,
            'year' => $this->year,
            'colour' => $this->colour,
            'body_type_id' => $this->body_type_id,
            'vin_number' => $this->vin_number,
            'plate' => $this->plate,
            'engine_number' => $this->engine_number,
            'chassis_id' => $this->chassis_id,
            'cc_rating' => $this->cc_rating,
            'fuel_type' => $this->fuel_type,
            'transmission' => $this->transmission,
            'country_of_origin' => $this->country_of_origin,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'users' => new UserCollection($this->whenLoaded('users'))
        ];
    }
}

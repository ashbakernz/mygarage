<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'make', 'model', 'year', 'colour', 'body_type', 'vin_number', 'plate', 'engine_number', 'chassis_id', 'cc_rating', 'fuel_type', 'transmission', 'country_of_origin'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * Get the Users for the Vehicle.
     */
    public function user()
    {
        return $this->belongsToMany(\App\User::class);
    }

    /**
     * Get the Users for the Vehicle.
     */
    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

    /**
 * Getters and Setters
 */

    public function getPlate()
    {
        return $this->plate;
    }

    public function getMake()
    {
        return ucfirst($this->make);
    }

    public function getModel()
    {
        return ucfirst($this->model);
    }

    public function getSubmodel()
    {
        return ucfirst($this->submodel);
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getColour()
    {
        return ucfirst($this->colour);
    }

    public function getVinNumber()
    {
        return $this->vin_number;
    }

    public function getEngineNumber()
    {
        return $this->engine_number;
    }

    public function getChassisId()
    {
        return $this->chassis_id;
    }

    public function getBodyTypeAssetPath()
    {
        return '/svg/vehicle-body-types/' . $this->body_type . '.svg';
    }

    public function getMakeAndModel()
    {
      return ucfirst($this->make) . ' ' . ucfirst($this->model);
    }
}

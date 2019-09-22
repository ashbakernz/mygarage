<?php

use App\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'make' => 'subaru',
                'model' => 'legacy',
                'model_code' => null,
                'submodel' => null,
                'year' => '2007',
                'colour' => 'silver',
                'body_type' => 'station-wagon-full-size',
                'vin_number' =>'7AT0GF0BX16155468',
                'plate' => 'KSR185',
                'engine_number' => null,
                'chassis_id' => 'BP5-155468',
                'cc_rating' => '1994',
                'fuel_type' => 'petrol',
                'transmission' => '4-gear automatic',
                'country_of_origin' => 'japan',
            ],
            [
                'make' => 'mitsubishi',
                'model' => 'lancer',
                'model_code' => 'LX4S41',
                'submodel' => '2.0P VR-X SEDAN A',
                'year' => '2005',
                'colour' => 'white',
                'body_type' => 'sedan-four-door',
                'vin_number' =>'JMFSRCS6A5U009160',
                'plate' => 'CZJ562',
                'engine_number' => null,
                'chassis_id' => null,
                'cc_rating' => '1999',
                'fuel_type' => 'petrol',
                'transmission' => '4-gear automatic',
                'country_of_origin' => 'japan',
            ]
        ];
        foreach ($data as $user) {
            $vehicle = Vehicle::create($user);
            $user = App\User::find(1);
            $user->vehicles()->attach($vehicle);
        }
    }
}

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Vehicle;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'make' => $faker->sentence(),
        'model' => $faker->sentence(),
        'year' => $faker->sentence(),
        'colour' => $faker->sentence(),
        'body_style' => $faker->sentence(),
        'vin_number' => $faker->sentence(),
        'plate' => $faker->sentence(),
        'engine_number' => $faker->sentence(),
        'chassis_id' => random_int(0, 9223372036854775807),
        'cc_rating' => $faker->sentence(),
        'fuel_type' => $faker->sentence(),
        'transmission' => $faker->sentence(),
        'country_of_origin' => $faker->sentence()
    ];
});

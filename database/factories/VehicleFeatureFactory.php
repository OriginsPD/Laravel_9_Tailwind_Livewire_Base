<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Feature;
use App\Models\Vehicle;
use App\Models\vehicleFeature;

class VehicleFeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'feature_id' => Feature::factory(),
            'vehicle_id' => Vehicle::factory(),
        ];
    }
}

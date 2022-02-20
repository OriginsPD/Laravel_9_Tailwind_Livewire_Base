<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Vehicle;
use App\Models\book;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => Client::factory(),
            'vehicle_id' => Vehicle::factory(),
            'pickup_location' => $this->faker->streetAddress(),
            'pickup_date' => $this->faker->dateTimeThisYear(),
            'dropoff_location' => $this->faker->streetAddress(),
            'dropoff_date' => $this->faker->dateTimeThisYear()
        ];
    }
}

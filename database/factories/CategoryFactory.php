<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\category;
use App\Models\Category as ModelsCategory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }

    public function importData(): void
    {
        $types = collect([
            ['name' => 'Sedan', 'resource' => 'https://www.volvocars.com/images/v/-/media/project/contentplatform/data/media/category/sedan/s90_recharge_fixed.jpg?h=860&iar=0&w=1147'],
            ['name' => 'Lift back', 'resource' => 'Lift back'],
            ['name' => 'SUV', 'resource' => 'SUV'],
            ['name' => 'Van' ,'resource' => 'Van'],
            ['name' => 'Roadster' ,'resource' => 'Van'],
            ['name' => 'Hatchback' ,'resource' => 'Van'],
            ['name' => 'Micro' ,'resource' => 'Micro'],
            ['name' => 'CUV' ,'resource' => 'CUV'],
            ['name' => 'Heavy Duty Pickup Truck' ,'resource' => 'Heavy Duty Pickup Truck'],
            ['name' => 'Off Road' ,'resource' => 'Off Road'],
            ['name' => 'Pickup Truck' ,'resource' => 'Pickup Truck'],
            ['name' => 'Coupe' ,'resource' => 'Coupe'],
            ['name' => 'Supercar' ,'resource' => 'Supercar'],
            ['name' => 'Camper-van' ,'resource' => 'Camper-van'],
            ['name' => 'Mini-truck' ,'resource' => 'Mini-truck'],
            ['name' => 'Cabriolet' ,'resource' => 'Cabriolet'],
            ['name' => 'Minivan' ,'resource' => 'Minivan'],
            ['name' => 'Truck' ,'resource' => 'Truck'],
            ['name' => 'Big-Truck' ,'resource' => 'Big-Truck'],
            ['name' => 'Passenger Van' ,'resource' => 'Passenger Van'],
            ['name' => 'Cargo Van' ,'resource' => 'Cargo Van'],
            ['name' => 'Muscle Car' ,'resource' => 'Muscle Car'],
            ['name' => 'Station Wagon' ,'resource' => 'Station Wagon'],

        ]);

        $types->map(fn($data) => (
           Category::create([
               'name' => $data['name'],
               'description' => $this->faker->sentence,
           ])
        ));
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\addon;

class AddonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Addon::class;

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
            'price' => $this->faker->randomFloat(2, 30, 50.99),
            'amount' => $this->faker->numberBetween(1, 10),
        ];
    }

    public function importData(): void
    {

        $addon = collect([
            ['name' => 'Windshield & Tyre Protection','description' => $this->faker->sentence, 'price' => $this->faker->randomFloat(min: 100, max: 5000), 'quantity' => random_int(2,50)],
            ['name' => 'Map', 'description' => $this->faker->sentence, 'price' => $this->faker->randomFloat(min: 100, max: 5000), 'quantity' => random_int(2,50)],
            ['name' => 'Infant Carrier', 'description' => $this->faker->sentence, 'price' => $this->faker->randomFloat(min: 100, max: 5000), 'quantity' => random_int(2,50)],
            ['name' => 'Booster Seat', 'description' => $this->faker->sentence, 'price' => $this->faker->randomFloat(min: 100, max: 5000), 'quantity' => random_int(2,50)],
            ['name' => 'Child Seat', 'description' => $this->faker->sentence, 'price' => $this->faker->randomFloat(min: 100, max: 5000), 'quantity' => random_int(2,50)],
            ['name' => 'Mobile Hotspot', 'description' => $this->faker->sentence, 'price' => $this->faker->randomFloat(min: 100, max: 5000), 'quantity' => random_int(2,50)],
        ]);

        $addon->map(fn($data) => (
            addon::create([
                'name' => $data['name'],
                'price' => $data['price'],
                'description' => $data['description'],
                'amount' => $data['quantity'],
            ])
        ));
    }
}

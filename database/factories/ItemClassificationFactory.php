<?php

namespace Database\Factories;

use App\Models\ItemClassification;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemClassificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemClassification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gender_id' => \App\Models\Gender::factory()->create(['name' => 'Women']),
            'name'      => $this->faker->unique()->word()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\ItemTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemTypesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemTypes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->unique()->word()
        ];
    }
}

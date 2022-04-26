<?php

namespace Database\Factories;

use App\Models\people;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\people>
 */
class peopleFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = people::class;



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'birthdate' => $this->faker->date('Y-m-d'),
        ];
    }
}

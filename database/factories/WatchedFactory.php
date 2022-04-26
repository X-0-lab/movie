<?php

namespace Database\Factories;

use App\Models\Watched;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Watched>
 */
class WatchedFactory extends Factory
{

    /**
     * @var string
     */
    protected $model = Watched::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'movieID' => $this->faker->uuid,
            'stars' => $this->faker->numberBetween(0,5),
            'comments' => $this->faker->text(200),
        ];
    }
}

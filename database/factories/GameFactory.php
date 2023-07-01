<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GameFactory extends Factory
{
    use HasFactory;
    protected $model = Game::class;

    public function definition(): array
    {
        return [
            "launchcode" => $this->faker->uuid(),
            "name" => $this->faker->colorName(), // ran out of ideas and using color names
            'rtp' => $this->faker->randomFloat(2, 20, 30)
        ];
    }
}

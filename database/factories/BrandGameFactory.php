<?php

namespace Database\Factories;

use App\Models\BrandGame;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandGameFactory extends Factory
{
    use HasFactory;
    protected $model = BrandGame::class;

    public function definition(): array
    {
        $game_types = ['blackjack', 'poker', 'roullete', 'pachinko', 'slot machine'];
        return [
            'brandid' => $this->faker->randomDigitNotZero(),
            'category' => $game_types[array_rand($game_types, 1)],
            'hot' => $this->faker->boolean(),
            'new' => $this->faker->boolean()
        ];
    }
}

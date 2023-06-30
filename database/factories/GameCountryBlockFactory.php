<?php

namespace Database\Factories;

use App\Models\GameCountryBlock;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GameCountryBlockFactory extends Factory
{
    use HasFactory;
    protected $model = GameCountryBlock::class;

    public function definition(): array
    {
        return [
            'country' => $this->faker->countryCode('alpha-3')
        ];
    }
}

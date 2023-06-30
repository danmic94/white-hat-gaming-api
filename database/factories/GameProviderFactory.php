<?php

namespace Database\Factories;

use App\Models\GameProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GameProviderFactory extends Factory
{
    use HasFactory;
    protected $model = GameProvider::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
        ];
    }
}

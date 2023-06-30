<?php

namespace Database\Factories;

use App\Models\GameBrandBlock;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GameBrandBlockFactory extends Factory
{
    use HasFactory;
    protected $model = GameBrandBlock::class;

    public function definition(): array
    {
        return [];
    }
}

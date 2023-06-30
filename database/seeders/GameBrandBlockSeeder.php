<?php

namespace Database\Seeders;

use App\Models\BrandGame;
use App\Models\GameBrandBlock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameBrandBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Truncate entries if exist to start from scratch
        GameBrandBlock::truncate();
        $all_brand_games = BrandGame::all()->random(10);

        foreach ($all_brand_games as $game) {
            GameBrandBlock::factory()->create([
                'launchcode' => $game->launchcode,
                'brandid' => $game->brandid,
            ]);
        }
    }
}

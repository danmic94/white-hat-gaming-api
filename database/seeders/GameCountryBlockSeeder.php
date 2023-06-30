<?php

namespace Database\Seeders;

use App\Models\BrandGame;
use App\Models\GameCountryBlock;
use Illuminate\Database\Seeder;

class GameCountryBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Truncate entries if exist to start from scratch
        GameCountryBlock::truncate();
        $all_brand_games = BrandGame::all()->random(5);

        foreach ($all_brand_games as $game) {
            GameCountryBlock::factory()->create([
                'launchcode' => $game->launchcode,
                'brandid' => $game->brandid,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\BrandGame;
use App\Models\Game;
use Illuminate\Database\Seeder;

class BrandGamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Truncate entries if exist to start from scratch
        try {
            BrandGame::truncate();
            $all_games_entries = Game::all();

            foreach ($all_games_entries as $game) {
                BrandGame::factory()->count(rand(1, 3))->create([
                    'launchcode' => $game->launchcode
                ]);
            }
        } catch (\Throwable $e) {
            $this->command->error("SQL Error: " . $e->getMessage() . "\n");
        }
    }
}

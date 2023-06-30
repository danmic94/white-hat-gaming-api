<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\GameProvider;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Truncate entries if exist to start from scratch
        Game::truncate();
        $all_game_providers_entries = GameProvider::all();

        foreach ($all_game_providers_entries as $provider) {
            Game::factory()->count(rand(2, 4))->create([
                'game_provider_id' => $provider->id
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\GameProvider;
use Illuminate\Database\Seeder;

class GameProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Truncate entries if exist to start from scratch
        GameProvider::truncate();
        GameProvider::factory()->count(5)->create();
    }
}

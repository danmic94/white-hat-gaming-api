<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(GameProviderSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(BrandGamesSeeder::class);
        $this->call(GameBrandBlockSeeder::class);
        $this->call(GameCountryBlockSeeder::class);
        Model::reguard();
    }
}

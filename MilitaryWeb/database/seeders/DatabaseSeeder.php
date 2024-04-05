<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RangeSeeder::class,
            CountrySeeder::class,
            DestinationSeeder::class,
            ArmySeeder::class,
            RangeSeeder::class,
            RolSeeder::class,
            UserSeeder::class,
            MissionSeeder::class,
        ]);
    }
}

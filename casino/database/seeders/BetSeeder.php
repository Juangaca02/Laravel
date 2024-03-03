<?php

namespace Database\Seeders;

use App\Models\Bet;
use Illuminate\Database\Seeder;

class BetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Bet::factory(5)->create();
    }
}

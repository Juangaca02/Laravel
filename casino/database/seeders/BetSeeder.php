<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bets')->insert([
            'user_id' => str(random_int(1, 2)),
            'game_id' => str(random_int(1, 2)),
            'description_bet' => Str::random(10),
            'amount_bet' => Str::random(10),
        ]);
    }
}

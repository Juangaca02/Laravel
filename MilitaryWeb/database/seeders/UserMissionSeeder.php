<?php

namespace Database\Seeders;

use App\Models\User_Mission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_mission = [
            [
                'user_id' => '1',
                'mission_id' => '1',
            ],
        ];
        foreach ($user_mission as $data) {
            User_Mission::create($data);
        }
    }
}

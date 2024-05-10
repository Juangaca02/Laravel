<?php

namespace Database\Seeders;

use App\Models\Range;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rangeData = [
            [
                'name' => 'Sin Definir',
                'description' => 'Sin Definir',
                'icon' => 'Sin Definir',
            ],
            [
                'name' => 'Soldado',
                'description' => 'Soldado raso en el ejército español',
                'icon' => 'soldado-icon.png',
            ],
            [
                'name' => 'Cabo',
                'description' => 'Cabo en el ejército español',
                'icon' => 'cabo-icon.png',
            ],
            [
                'name' => 'Cabo primero',
                'description' => 'Cabo primero en el ejército español',
                'icon' => 'cabo-icon.png',
            ],
            [
                'name' => 'Sargento',
                'description' => 'Sargento en el ejército español',
                'icon' => 'sargento-icon.png',
            ],
            [
                'name' => 'Sargento primero',
                'description' => 'Sargento primero en el ejército español',
                'icon' => 'sargento-icon.png',
            ],
            [
                'name' => 'Brigada',
                'description' => 'Brigada en el ejército español',
                'icon' => 'brigada-icon.png',
            ],
            [
                'name' => 'Subteniente',
                'description' => 'Subteniente en el ejército español',
                'icon' => 'subteniente-icon.png',
            ],
            [
                'name' => 'Teniente',
                'description' => 'Teniente en el ejército español',
                'icon' => 'teniente-icon.png',
            ],
            [
                'name' => 'Capitán',
                'description' => 'Capitán en el ejército español',
                'icon' => 'capitan-icon.png',
            ],
            [
                'name' => 'Comandante',
                'description' => 'Comandante en el ejército español',
                'icon' => 'comandante-icon.png',
            ],
            [
                'name' => 'Teniente coronel',
                'description' => 'Teniente coronel en el ejército español',
                'icon' => 'teniente-coronel-icon.png',
            ],
            [
                'name' => 'Coronel',
                'description' => 'Coronel en el ejército español',
                'icon' => 'coronel-icon.png',
            ],
            [
                'name' => 'General de brigada',
                'description' => 'General de brigada en el ejército español',
                'icon' => 'general-brigada-icon.png',
            ],
            [
                'name' => 'General de división',
                'description' => 'General de división en el ejército español',
                'icon' => 'general-division-icon.png',
            ],
            [
                'name' => 'Teniente general',
                'description' => 'Teniente general en el ejército español',
                'icon' => 'teniente-general-icon.png',
            ],
            [
                'name' => 'General de ejército',
                'description' => 'General de ejército en el ejército español',
                'icon' => 'general-ejercito-icon.png',
            ],
        ];

        // Inserta los datos en la tabla
        foreach ($rangeData as $data) {
            Range::create($data);
        }
    }
}

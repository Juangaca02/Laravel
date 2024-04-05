<?php

namespace Database\Seeders;

use App\Models\Army;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArmySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $armyData = [
            [
                'name' => 'Ejército de Tierra',
                'description' => 'El Ejército de Tierra es la rama terrestre de las Fuerzas Armadas españolas, encargada de llevar a cabo operaciones militares en tierra.',
                'icon' => 'ejercito-tierra.png',
            ],
            [
                'name' => 'Ejército Naval',
                'description' => 'El Ejército Naval es la rama de la Armada española encargada de operaciones en el mar y en áreas costeras.',
                'icon' => 'ejercito-naval.png',
            ],
            [
                'name' => 'Ejército de Aire',
                'description' => 'El Ejército de Aire es la rama aérea de las Fuerzas Armadas españolas, responsable de la defensa y el control del espacio aéreo.',
                'icon' => 'ejercito-aire.png',
            ],
        ];

        // Inserta los datos en la tabla
        Army::insert($armyData);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinationData =
            [
                [
                    'name' => 'Bagdad',
                    'country_id' => 25, // Arabia Saudita
                    'description' => 'Bagdad es la capital de Irak y ha sido escenario de numerosos conflictos militares en las últimas décadas.',
                ],
                [
                    'name' => 'Kabul',
                    'country_id' => 12, // Afganistán
                    'description' => 'Kabul, la capital de Afganistán, ha sido un punto focal de los conflictos en la región, especialmente durante la guerra en Afganistán.',
                ],
                [
                    'name' => 'Jerusalén',
                    'country_id' => 18, // Israel
                    'description' => 'Jerusalén es una ciudad disputada en el conflicto israelí-palestino y alberga lugares sagrados para varias religiones, lo que la convierte en un punto de tensión constante.',
                ],
                [
                    'name' => 'Seúl',
                    'country_id' => 23, // Corea del Sur
                    'description' => 'Seúl, la capital de Corea del Sur, se encuentra cerca de la Zona Desmilitarizada que separa Corea del Norte y Corea del Sur, lo que la convierte en una ciudad estratégica en el conflicto entre ambas naciones.',
                ],
                [
                    'name' => 'Srinagar',
                    'country_id' => 28, // India
                    'description' => 'Srinagar, ubicada en la región de Cachemira, ha sido testigo de conflictos militares entre India y Pakistán debido a la disputa territorial en la región.',
                ],
                [
                    'name' => 'Gaza',
                    'country_id' => 16, // Palestina
                    'description' => 'La Franja de Gaza, controlada por Hamas, ha sido escenario de conflictos entre Israel y grupos palestinos, lo que ha llevado a numerosas confrontaciones militares en la región.',
                ],
                [
                    'name' => 'Donetsk',
                    'country_id' => 17, // Ucrania
                    'description' => 'Donetsk es una ciudad en el este de Ucrania que ha sido el epicentro del conflicto en el este de Ucrania, con enfrentamientos entre las fuerzas ucranianas y separatistas respaldados por Rusia.',
                ],
                [
                    'name' => 'Alepo',
                    'country_id' => 11, // Siria
                    'description' => 'Alepo, una de las ciudades más antiguas del mundo, ha sufrido graves daños debido a la guerra civil en Siria, con batallas entre el gobierno sirio y los grupos rebeldes.',
                ],
                [
                    'name' => 'Guantánamo',
                    'country_id' => 20, //Cuba
                    'description' => 'Guantánamo, ubicado en Cuba, es conocido por la Base Naval de la Bahía de Guantánamo, una instalación militar estadounidense que ha sido objeto de controversia internacional.'
                ],
                [
                    'name' => 'Sebastopol',
                    'country_id' => 21, //Rusia (Crimea)
                    'description' => 'Sebastopol, ubicado en la península de Crimea, es conocido por su importancia estratégica y ha sido el foco de tensiones geopolíticas entre Rusia y Ucrania.'
                ],

            ];

        // Inserta los datos en la tabla
        foreach ($destinationData as $data) {
            Destination::create($data);
        }
    }
}

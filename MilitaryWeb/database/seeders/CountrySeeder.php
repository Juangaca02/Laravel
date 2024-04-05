<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countryData =
            [
                [
                    'id' => 1,
                    'name' => 'Estados Unidos',
                    'description' => 'Estados Unidos de América, comúnmente conocidos como Estados Unidos (EE. UU. o EUA), es un país ubicado principalmente en América del Norte.'
                ],
                [
                    'id' => 2,
                    'name' => 'Canadá',
                    'description' => 'Canadá es un país ubicado en la parte norte de América del Norte. Sus diez provincias y tres territorios se extienden desde el Atlántico hasta el Pacífico y hacia el norte en el Océano Ártico.'
                ],
                [
                    'id' => 3,
                    'name' => 'Brasil',
                    'description' => 'Brasil, oficialmente la República Federativa de Brasil, es el país más grande tanto de América del Sur como de América Latina. Es el quinto país más grande del mundo en área y el sexto más poblado.'
                ],
                [
                    'id' => 4,
                    'name' => 'México',
                    'description' => 'México es un país situado en la parte sur de América del Norte. Es la nación de habla hispana más poblada.'
                ],
                [
                    'id' => 5,
                    'name' => 'Argentina',
                    'description' => 'Argentina, oficialmente la República Argentina, es un país ubicado en su mayor parte en la mitad sur de América del Sur.'
                ],
                [
                    'id' => 6,
                    'name' => 'Alemania',
                    'description' => 'Alemania, oficialmente la República Federal de Alemania, es un país en Europa Central. Es el segundo país más poblado de Europa después de Rusia, y el estado miembro más poblado de la Unión Europea.'
                ],
                [
                    'id' => 7,
                    'name' => 'Francia',
                    'description' => 'Francia, oficialmente la República Francesa, es un país ubicado principalmente en Europa Occidental. Consiste en Francia metropolitana y varias regiones y territorios de ultramar.'
                ],
                [
                    'id' => 8,
                    'name' => 'Reino Unido',
                    'description' => 'El Reino Unido de Gran Bretaña e Irlanda del Norte, comúnmente conocido como el Reino Unido (RU), es un país soberano situado al noroeste de la costa europea.'
                ],
                [
                    'id' => 9,
                    'name' => 'Italia',
                    'description' => 'Italia, oficialmente la República Italiana, es un país que consiste en una península delimitada por los Alpes y varias islas circundantes.'
                ],
                [
                    'id' => 10,
                    'name' => 'España',
                    'description' => 'España, oficialmente el Reino de España, es un país en el suroeste de Europa con algunos territorios al otro lado del Estrecho de Gibraltar y el Océano Atlántico.'
                ],
                [
                    'id' => 11,
                    'name' => 'Siria',
                    'description' => 'Siria, oficialmente la República Árabe Siria, es un país en el suroeste de Asia, que comparte fronteras con Líbano al oeste, Israel al suroeste, Jordania al sur, Irak al este y Turquía al norte.'
                ],
                [
                    'id' => 12,
                    'name' => 'Afganistán',
                    'description' => 'Afganistán, oficialmente la República Islámica de Afganistán, es un país sin litoral ubicado en Asia Central y del Sur. Es una región montañosa que comparte fronteras con Pakistán al este y sur, Irán al oeste, Turkmenistán, Uzbekistán y Tayikistán al norte, y China al noreste a través del corredor de Wakhan.'
                ],
                [
                    'id' => 13,
                    'name' => 'Yemen',
                    'description' => 'Yemen, oficialmente la República de Yemen, es un país en la península arábiga en Asia Occidental. Limita con Arabia Saudita al norte, el mar Rojo al oeste, el mar Arábigo al sur y Omán al este.'
                ],
                [
                    'id' => 14,
                    'name' => 'Somalia',
                    'description' => 'Somalia, oficialmente la República Federal de Somalia, es un país en el Cuerno de África. Limita con Etiopía al oeste, Yibuti al noroeste, el golfo de Adén al norte, el océano Índico al este y Kenia al suroeste.'
                ],
                [
                    'id' => 15,
                    'name' => 'Irak',
                    'description' => 'Irak, oficialmente la República de Irak, es un país en el Medio Oriente, ubicado en la parte occidental de Asia. Limita con Turquía al norte, Irán al este, Kuwait al sureste, Arabia Saudita al sur, Jordania al suroeste y Siria al oeste.'
                ],
                [
                    'id' => 16,
                    'name' => 'Palestina',
                    'description' => 'Palestina es un territorio geográfico y político en el Levante, que actualmente está dividido entre Israel y los territorios palestinos de Cisjordania y la Franja de Gaza.'
                ],
                [
                    'id' => 17,
                    'name' => 'Ucrania',
                    'description' => 'Ucrania es un país de Europa del Este. Limita con Rusia al este y noreste, Bielorrusia al noroeste, Polonia, Eslovaquia y Hungría al oeste, Rumania y Moldavia al suroeste, y el mar Negro y el mar de Azov al sur y sureste.'
                ],
                [
                    'id' => 18,
                    'name' => 'Israel',
                    'description' => 'Israel es un país en el suroeste de Asia, ubicado en la ribera sureste del mar Mediterráneo y en la confluencia de Europa, Asia y África. Limita con el Líbano al norte, Siria al noreste, Jordania al este, Egipto al suroeste y el mar Mediterráneo al oeste.'
                ],
                [
                    'id' => 19,
                    'name' => 'Afganistán',
                    'description' => 'Afganistán, oficialmente la República Islámica de Afganistán, es un país sin litoral ubicado en Asia Central y del Sur. Es una región montañosa que comparte fronteras con Pakistán al este y sur, Irán al oeste, Turkmenistán, Uzbekistán y Tayikistán al norte, y China al noreste a través del corredor de Wakhan.'
                ],
                [
                    'id' => 20,
                    'name' => 'Cuba',
                    'description' => 'Cuba es un país situado en el mar Caribe, en la región del Caribe. Está compuesto por la isla principal de Cuba, la Isla de la Juventud y varias islas menores.'
                ],
                [
                    'id' => 21,
                    'name' => 'Rusia',
                    'description' => 'Rusia, oficialmente la Federación Rusa, es el país más grande del mundo, que se extiende por Europa del Este y Asia del Norte. Limita con dieciséis países y tiene la frontera terrestre más larga del mundo.'
                ],
                [
                    'id' => 22,
                    'name' => 'Corea del Norte',
                    'description' => 'Corea del Norte, oficialmente la República Popular Democrática de Corea, es un país en Asia Oriental, ubicado en la parte norte de la península coreana. Es conocido por su régimen autoritario y sus tensiones militares con Corea del Sur.'
                ],
                [
                    'id' => 23,
                    'name' => 'Corea del Sur',
                    'description' => 'Corea del Sur, oficialmente la República de Corea, es un país en Asia Oriental, ubicado en la parte sur de la península coreana. Ha experimentado tensiones militares con Corea del Norte y ha sido un aliado cercano de los Estados Unidos.'
                ],
                [
                    'id' => 24,
                    'name' => 'Irán',
                    'description' => 'Irán, oficialmente la República Islámica de Irán, es un país en Asia Occidental, conocido por su participación en conflictos en la región, incluyendo su intervención en Siria y su rivalidad con Arabia Saudita.'
                ],
                [
                    'id' => 25,
                    'name' => 'Arabia Saudita',
                    'description' => 'Arabia Saudita es un país en Asia Occidental, conocido por su riqueza petrolera y su influencia en los asuntos del Medio Oriente. Ha estado involucrado en conflictos regionales, incluyendo la guerra en Yemen.'
                ],
                [
                    'id' => 26,
                    'name' => 'Turquía',
                    'description' => 'Turquía es un país ubicado en Europa Oriental y Asia Occidental. Tiene una larga historia de conflictos militares y ha sido un actor importante en la región del Medio Oriente, especialmente en Siria e Irak.'
                ],
                [
                    'id' => 27,
                    'name' => 'Pakistán',
                    'description' => 'Pakistán es un país en Asia del Sur, conocido por sus tensiones militares con la India, así como por su papel en el conflicto en Afganistán y su lucha contra el terrorismo.'
                ],
                [
                    'id' => 28,
                    'name' => 'India',
                    'description' => 'India es un país en Asia del Sur, conocido por su conflicto de larga data con Pakistán, así como por su disputa territorial con China en la región de Ladakh.'
                ]
            ];

        // Inserta los datos en la tabla
        Country::insert($countryData);
    }
}

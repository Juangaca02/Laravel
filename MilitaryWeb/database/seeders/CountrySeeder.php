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
                    'name' => 'Estados Unidos',
                    'description' => 'Estados Unidos de América, comúnmente conocidos como Estados Unidos (EE. UU. o EUA), es un país ubicado principalmente en América del Norte.'
                ],
                [
                    'name' => 'Canadá',
                    'description' => 'Canadá es un país ubicado en la parte norte de América del Norte. Sus diez provincias y tres territorios se extienden desde el Atlántico hasta el Pacífico y hacia el norte en el Océano Ártico.'
                ],
                [
                    'name' => 'Brasil',
                    'description' => 'Brasil, oficialmente la República Federativa de Brasil, es el país más grande tanto de América del Sur como de América Latina. Es el quinto país más grande del mundo en área y el sexto más poblado.'
                ],
                [
                    'name' => 'México',
                    'description' => 'México es un país situado en la parte sur de América del Norte. Es la nación de habla hispana más poblada.'
                ],
                [
                    'name' => 'Argentina',
                    'description' => 'Argentina, oficialmente la República Argentina, es un país ubicado en su mayor parte en la mitad sur de América del Sur.'
                ],
                [
                    'name' => 'Alemania',
                    'description' => 'Alemania, oficialmente la República Federal de Alemania, es un país en Europa Central. Es el segundo país más poblado de Europa después de Rusia, y el estado miembro más poblado de la Unión Europea.'
                ],
                [
                    'name' => 'Francia',
                    'description' => 'Francia, oficialmente la República Francesa, es un país ubicado principalmente en Europa Occidental. Consiste en Francia metropolitana y varias regiones y territorios de ultramar.'
                ],
                [
                    'name' => 'Reino Unido',
                    'description' => 'El Reino Unido de Gran Bretaña e Irlanda del Norte, comúnmente conocido como el Reino Unido (RU), es un país soberano situado al noroeste de la costa europea.'
                ],
                [
                    'name' => 'Italia',
                    'description' => 'Italia, oficialmente la República Italiana, es un país que consiste en una península delimitada por los Alpes y varias islas circundantes.'
                ],
                [
                    'name' => 'España',
                    'description' => 'España, oficialmente el Reino de España, es un país en el suroeste de Europa con algunos territorios al otro lado del Estrecho de Gibraltar y el Océano Atlántico.'
                ],
                [
                    'name' => 'Siria',
                    'description' => 'Siria, oficialmente la República Árabe Siria, es un país en el suroeste de Asia, que comparte fronteras con Líbano al oeste, Israel al suroeste, Jordania al sur, Irak al este y Turquía al norte.'
                ],
                [
                    'name' => 'Afganistán',
                    'description' => 'Afganistán, oficialmente la República Islámica de Afganistán, es un país sin litoral ubicado en Asia Central y del Sur. Es una región montañosa que comparte fronteras con Pakistán al este y sur, Irán al oeste, Turkmenistán, Uzbekistán y Tayikistán al norte, y China al noreste a través del corredor de Wakhan.'
                ],
                [
                    'name' => 'Yemen',
                    'description' => 'Yemen, oficialmente la República de Yemen, es un país en la península arábiga en Asia Occidental. Limita con Arabia Saudita al norte, el mar Rojo al oeste, el mar Arábigo al sur y Omán al este.'
                ],
                [
                    'name' => 'Somalia',
                    'description' => 'Somalia, oficialmente la República Federal de Somalia, es un país en el Cuerno de África. Limita con Etiopía al oeste, Yibuti al noroeste, el golfo de Adén al norte, el océano Índico al este y Kenia al suroeste.'
                ],
                [
                    'name' => 'Irak',
                    'description' => 'Irak, oficialmente la República de Irak, es un país en el Medio Oriente, ubicado en la parte occidental de Asia. Limita con Turquía al norte, Irán al este, Kuwait al sureste, Arabia Saudita al sur, Jordania al suroeste y Siria al oeste.'
                ],
                [
                    'name' => 'Palestina',
                    'description' => 'Palestina es un territorio geográfico y político en el Levante, que actualmente está dividido entre Israel y los territorios palestinos de Cisjordania y la Franja de Gaza.'
                ],
                [
                    'name' => 'Ucrania',
                    'description' => 'Ucrania es un país de Europa del Este. Limita con Rusia al este y noreste, Bielorrusia al noroeste, Polonia, Eslovaquia y Hungría al oeste, Rumania y Moldavia al suroeste, y el mar Negro y el mar de Azov al sur y sureste.'
                ],
                [
                    'name' => 'Israel',
                    'description' => 'Israel es un país en el suroeste de Asia, ubicado en la ribera sureste del mar Mediterráneo y en la confluencia de Europa, Asia y África. Limita con el Líbano al norte, Siria al noreste, Jordania al este, Egipto al suroeste y el mar Mediterráneo al oeste.'
                ],
                [
                    'name' => 'Afganistán',
                    'description' => 'Afganistán, oficialmente la República Islámica de Afganistán, es un país sin litoral ubicado en Asia Central y del Sur. Es una región montañosa que comparte fronteras con Pakistán al este y sur, Irán al oeste, Turkmenistán, Uzbekistán y Tayikistán al norte, y China al noreste a través del corredor de Wakhan.'
                ],
                [
                    'name' => 'Cuba',
                    'description' => 'Cuba es un país situado en el mar Caribe, en la región del Caribe. Está compuesto por la isla principal de Cuba, la Isla de la Juventud y varias islas menores.'
                ],
                [
                    'name' => 'Rusia',
                    'description' => 'Rusia, oficialmente la Federación Rusa, es el país más grande del mundo, que se extiende por Europa del Este y Asia del Norte. Limita con dieciséis países y tiene la frontera terrestre más larga del mundo.'
                ],
                [
                    'name' => 'Corea del Norte',
                    'description' => 'Corea del Norte, oficialmente la República Popular Democrática de Corea, es un país en Asia Oriental, ubicado en la parte norte de la península coreana. Es conocido por su régimen autoritario y sus tensiones militares con Corea del Sur.'
                ],
                [
                    'name' => 'Corea del Sur',
                    'description' => 'Corea del Sur, oficialmente la República de Corea, es un país en Asia Oriental, ubicado en la parte sur de la península coreana. Ha experimentado tensiones militares con Corea del Norte y ha sido un aliado cercano de los Estados Unidos.'
                ],
                [
                    'name' => 'Irán',
                    'description' => 'Irán, oficialmente la República Islámica de Irán, es un país en Asia Occidental, conocido por su participación en conflictos en la región, incluyendo su intervención en Siria y su rivalidad con Arabia Saudita.'
                ],
                [
                    'name' => 'Arabia Saudita',
                    'description' => 'Arabia Saudita es un país en Asia Occidental, conocido por su riqueza petrolera y su influencia en los asuntos del Medio Oriente. Ha estado involucrado en conflictos regionales, incluyendo la guerra en Yemen.'
                ],
                [
                    'name' => 'Turquía',
                    'description' => 'Turquía es un país ubicado en Europa Oriental y Asia Occidental. Tiene una larga historia de conflictos militares y ha sido un actor importante en la región del Medio Oriente, especialmente en Siria e Irak.'
                ],
                [
                    'name' => 'Pakistán',
                    'description' => 'Pakistán es un país en Asia del Sur, conocido por sus tensiones militares con la India, así como por su papel en el conflicto en Afganistán y su lucha contra el terrorismo.'
                ],
                [
                    'name' => 'India',
                    'description' => 'India es un país en Asia del Sur, conocido por su conflicto de larga data con Pakistán, así como por su disputa territorial con China en la región de Ladakh.'
                ],
                [
                    'name' => 'Albania',
                    'description' => 'País pequeño en el sureste de Europa, en la península balcánica, conocido por su costa adriática y su patrimonio cultural antiguo.'
                ],
                [
                    'name' => 'Andorra',
                    'description' => 'Pequeño principado situado entre Francia y España en los Pirineos, conocido por sus estaciones de esquí y su estatus de paraíso fiscal.'
                ],
                [
                    'name' => 'Angola',
                    'description' => 'País del suroeste de África con una economía basada en el petróleo y una rica diversidad cultural y natural.'
                ],
                [
                    'name' => 'Antigua y Barbuda',
                    'description' => 'Nación insular en el Caribe, conocida por sus playas de arena blanca y su turismo de lujo.'
                ],
                [
                    'name' => 'Argelia',
                    'description' => 'País del norte de África, el más grande del continente, conocido por su vasta extensión de desierto del Sahara y su herencia cultural bereber y árabe.'
                ],
                [
                    'name' => 'Armenia',
                    'description' => 'Nación sin salida al mar en el Cáucaso del sur, con una rica historia y una identidad cultural marcada por ser uno de los primeros países en adoptar el cristianismo.'
                ],
                [
                    'name' => 'Australia',
                    'description' => 'País y continente en el hemisferio sur, conocido por su biodiversidad única, sus ciudades vibrantes y su vasto interior desértico.'
                ],
                [
                    'name' => 'Austria',
                    'description' => 'País alpino en Europa Central, famoso por su música clásica, su arquitectura imperial y sus paisajes montañosos.'
                ],
                [
                    'name' => 'Azerbaiyán',
                    'description' => 'País ubicado en el Cáucaso, a caballo entre Europa y Asia, conocido por su industria petrolera y su cultura multicultural.'
                ],
                [
                    'name' => 'Bahamas',
                    'description' => 'Nación insular en el Caribe, famosa por sus playas paradisíacas, turismo de lujo y aguas cristalinas.'
                ],
                [
                    'name' => 'Bangladés',
                    'description' => 'País densamente poblado en el sur de Asia, conocido por su rica cultura, su industria textil y sus desafíos medioambientales.'
                ],
                [
                    'name' => 'Barbados',
                    'description' => 'Isla en el Caribe oriental, reconocida por sus playas, su música calipso y su herencia colonial británica.'
                ],
                [
                    'name' => 'Baréin',
                    'description' => 'Pequeño reino insular en el Golfo Pérsico, conocido por su economía basada en el petróleo y su creciente sector financiero.'
                ],
                [
                    'name' => 'Bélgica',
                    'description' => 'País en Europa Occidental, conocido por su chocolate, sus cervezas y ser la sede de la Unión Europea y la OTAN.'
                ],
                [
                    'name' => 'Belice',
                    'description' => 'Nación en América Central, conocida por sus selvas, sus arrecifes de coral y su rica biodiversidad marina.'
                ],
                [
                    'name' => 'Benín',
                    'description' => 'País en África Occidental, conocido por sus sitios históricos relacionados con el antiguo Reino de Dahomey y su cultura vudú.'
                ],
                [
                    'name' => 'Bután',
                    'description' => 'Reino budista en el Himalaya, famoso por su enfoque en la felicidad nacional bruta y su belleza natural prístina.'
                ],
                [
                    'name' => 'Bielorrusia',
                    'description' => 'País sin salida al mar en Europa del Este, conocido por su arquitectura soviética y sus bosques extensos.'
                ],
                [
                    'name' => 'Birmania (Myanmar)',
                    'description' => 'País del sudeste asiático con una rica diversidad étnica, conocido por sus templos antiguos y su historia reciente de conflicto.'
                ],
                [
                    'name' => 'Bolivia',
                    'description' => 'País sin salida al mar en América del Sur, conocido por su altiplano andino, su cultura indígena y el Salar de Uyuni.'
                ],
                [
                    'name' => 'Bosnia y Herzegovina',
                    'description' => 'País en la península balcánica de Europa, conocido por su mezcla cultural y su historia reciente de guerra civil.'
                ],
                [
                    'name' => 'Botsuana',
                    'description' => 'Nación del sur de África, famosa por sus parques nacionales, vida silvestre y estabilidad política.'
                ],
                [
                    'name' => 'Brunéi',
                    'description' => 'Pequeño estado rico en petróleo en la isla de Borneo, en el sudeste asiático, conocido por su sultanato y su riqueza.'
                ],
                [
                    'name' => 'Bulgaria',
                    'description' => 'País en el sureste de Europa, en la península balcánica, conocido por sus monasterios ortodoxos y su rica historia.'
                ],
                [
                    'name' => 'Burkina Faso',
                    'description' => 'País sin salida al mar en África Occidental, conocido por su cultura tradicional y sus desafíos económicos.'
                ],
                [
                    'name' => 'Burundi',
                    'description' => 'Pequeña nación en África Central, con una historia de conflictos étnicos y una economía predominantemente agrícola.'
                ],
                [
                    'name' => 'Cabo Verde',
                    'description' => 'Nación insular en el Atlántico, frente a la costa noroeste de África, conocida por su música y su turismo.'
                ],
                [
                    'name' => 'Camboya',
                    'description' => 'País del sudeste asiático, conocido por los templos de Angkor Wat y su historia de genocidio bajo el régimen de los Jemeres Rojos.'
                ],
                [
                    'name' => 'Camerún',
                    'description' => 'País en África Central, con una gran diversidad geográfica y cultural, conocido como "África en miniatura".'
                ],
                [
                    'name' => 'Catar',
                    'description' => 'Rico emirato en el Golfo Pérsico, conocido por su enorme reserva de gas natural y su capital moderna, Doha.'
                ],
                [
                    'name' => 'Chad',
                    'description' => 'País sin salida al mar en África Central, con una economía basada en el petróleo y desafíos significativos en términos de desarrollo.'
                ],
                [
                    'name' => 'Chile',
                    'description' => 'País largo y estrecho en América del Sur, conocido por sus diversos paisajes que incluyen desiertos, montañas y la Patagonia.'
                ],
                [
                    'name' => 'China',
                    'description' => 'País más poblado del mundo, con una rica historia y una economía en rápido crecimiento, conocido por su Gran Muralla y su influencia global.'
                ],
                [
                    'name' => 'Chipre',
                    'description' => 'Isla en el Mediterráneo oriental, dividida entre una parte griega y una turca, conocida por sus playas y su herencia cultural antigua.'
                ],
                [
                    'name' => 'Ciudad del Vaticano',
                    'description' => 'El estado más pequeño del mundo, sede de la Iglesia Católica y hogar del Papa, ubicado en Roma, Italia.'
                ],
                [
                    'name' => 'Colombia',
                    'description' => 'País en el norte de América del Sur, conocido por su biodiversidad, su café y su historia de conflicto interno.'
                ],
                [
                    'name' => 'Comoras',
                    'description' => 'Nación insular en el Océano Índico, frente a la costa sureste de África, conocida por su cultura islámica y su biodiversidad marina.'
                ],
                [
                    'name' => 'Congo (República Democrática del Congo)',
                    'description' => 'País vasto en África Central, conocido por su riqueza mineral y sus desafíos de desarrollo y estabilidad política.'
                ],
                [
                    'name' => 'Congo (República del Congo)',
                    'description' => 'País en África Central, con vastas selvas tropicales y una economía basada en el petróleo.'
                ],
                [
                    'name' => 'Costa de Marfil',
                    'description' => 'País en África Occidental, conocido por su producción de cacao y su mezcla cultural.'
                ],
                [
                    'name' => 'Costa Rica',
                    'description' => 'País en América Central, famoso por su biodiversidad, sus parques nacionales y su estabilidad política.'
                ],
                [
                    'name' => 'Croacia',
                    'description' => 'País en el sureste de Europa, conocido por su costa adriática y su herencia cultural y arquitectónica.'
                ],
                [
                    'name' => 'Dinamarca',
                    'description' => 'País nórdico en Europa del Norte, conocido por su alto nivel de vida, su diseño escandinavo y su monarquía.'
                ],
                [
                    'name' => 'Dominica',
                    'description' => 'Pequeña isla en el Caribe, conocida por sus paisajes naturales, sus selvas y sus fuentes termales.'
                ],
                [
                    'name' => 'Ecuador',
                    'description' => 'País en la costa oeste de América del Sur, conocido por sus Islas Galápagos, su biodiversidad y su cultura indígena.'
                ],
                [
                    'name' => 'Egipto',
                    'description' => 'País del noreste de África, famoso por su antigua civilización y monumentos como las pirámides y la Esfinge.'
                ],
                [
                    'name' => 'El Salvador',
                    'description' => 'País pequeño en América Central, conocido por sus volcanes, playas y su historia de conflicto civil.'
                ],
                [
                    'name' => 'Emiratos Árabes Unidos',
                    'description' => 'Federación de siete emiratos en el Golfo Pérsico, famosa por su riqueza petrolera y su arquitectura moderna.'
                ],
                [
                    'name' => 'Eritrea',
                    'description' => 'País en el Cuerno de África, conocido por su historia de lucha por la independencia y su diversidad étnica.'
                ],
                [
                    'name' => 'Eslovaquia',
                    'description' => 'País en Europa Central, conocido por sus paisajes montañosos, castillos y su historia cultural.'
                ],
                [
                    'name' => 'Eslovenia',
                    'description' => 'Pequeña nación en Europa Central, famosa por su paisaje alpino, sus lagos y su costa adriática.'
                ],
                [
                    'name' => 'Estonia',
                    'description' => 'País báltico en el noreste de Europa, conocido por su avanzado sector tecnológico y su patrimonio medieval.'
                ],
                [
                    'name' => 'Esuatini (Suazilandia)',
                    'description' => 'Pequeño reino en el sur de África, conocido por su cultura tradicional y sus reservas naturales.'
                ],
                [
                    'name' => 'Etiopía',
                    'description' => 'País en el Cuerno de África, con una historia antigua y una diversidad cultural considerable.'
                ],
                [
                    'name' => 'Filipinas',
                    'description' => 'Archipiélago en el sudeste asiático, conocido por sus playas, su biodiversidad y su mezcla de culturas asiáticas y occidentales.'
                ],
                [
                    'name' => 'Finlandia',
                    'description' => 'País nórdico en Europa del Norte, conocido por su alta calidad de vida, su educación avanzada y su naturaleza prístina.'
                ],
                [
                    'name' => 'Fiyi',
                    'description' => 'Nación insular en el Pacífico Sur, famosa por sus playas, sus arrecifes de coral y su cultura hospitalaria.'
                ],
                [
                    'name' => 'Gabón',
                    'description' => 'País en África Central, con vastas selvas tropicales y una economía basada en el petróleo.'
                ],
                [
                    'name' => 'Gambia',
                    'description' => 'El país más pequeño de África continental, conocido por su río homónimo y su rica biodiversidad.'
                ],
                [
                    'name' => 'Georgia',
                    'description' => 'País en la región del Cáucaso, a caballo entre Europa y Asia, conocido por su vino y su historia antigua.'
                ],
                [
                    'name' => 'Ghana',
                    'description' => 'País en África Occidental, conocido por su historia como centro del comercio de oro y su cultura diversa.'
                ],
                [
                    'name' => 'Granada',
                    'description' => 'Pequeña nación insular en el Caribe, conocida como la "Isla de las Especias" por su producción de nuez moscada.'
                ],
                [
                    'name' => 'Grecia',
                    'description' => 'País en el sureste de Europa, conocido como la cuna de la civilización occidental y famoso por sus antiguas ruinas y su influencia en la filosofía y las artes.'
                ],
                [
                    'name' => 'Guatemala',
                    'description' => 'País en América Central, conocido por sus antiguas ruinas mayas, su cultura indígena y sus paisajes volcánicos.'
                ],
                [
                    'name' => 'Guinea',
                    'description' => 'País en África Occidental, rico en recursos naturales pero con desafíos significativos en términos de desarrollo y estabilidad.'
                ],
                [
                    'name' => 'Guinea-Bisáu',
                    'description' => 'Pequeño país en África Occidental, conocido por su biodiversidad y su historia de inestabilidad política.'
                ],
                [
                    'name' => 'Guinea Ecuatorial',
                    'description' => 'Pequeño país en África Central, rico en petróleo y conocido por su diversidad cultural y lingüística.'
                ],
                [
                    'name' => 'Guyana',
                    'description' => 'País en la costa norte de América del Sur, conocido por sus selvas tropicales, su diversidad étnica y sus recursos naturales.'
                ],
                [
                    'name' => 'Haití',
                    'description' => 'Nación caribeña en la isla de La Española, conocida por su historia de independencia y sus desafíos socioeconómicos.'
                ],
                [
                    'name' => 'Honduras',
                    'description' => 'País en América Central, conocido por sus ruinas mayas, sus playas y sus problemas de violencia y pobreza.'
                ],
                [
                    'name' => 'Hungría',
                    'description' => 'País sin salida al mar en Europa Central, famoso por su capital Budapest, sus baños termales y su rica historia.'
                ],
                [
                    'name' => 'Indonesia',
                    'description' => 'Archipiélago en el sudeste asiático, compuesto por miles de islas, conocido por su biodiversidad, sus volcanes y su cultura diversa.'
                ],
                [
                    'name' => 'Irak',
                    'description' => 'País en el Medio Oriente, conocido por su antigua civilización mesopotámica y su historia reciente de conflicto.'
                ],
                [
                    'name' => 'Irlanda',
                    'description' => 'País insular en el noroeste de Europa, conocido por sus paisajes verdes, su cultura celta y su literatura.'
                ],
                [
                    'name' => 'Islandia',
                    'description' => 'Isla en el Atlántico Norte, conocida por sus paisajes volcánicos, sus géiseres y su alto nivel de vida.'
                ],
                [
                    'name' => 'Islas Marshall',
                    'description' => 'Nación insular en el Océano Pacífico, conocida por su historia de pruebas nucleares y su cultura micronesia.'
                ],
                [
                    'name' => 'Islas Salomón',
                    'description' => 'País insular en el Pacífico Sur, conocido por su biodiversidad marina y su historia de conflictos durante la Segunda Guerra Mundial.'
                ],
                [
                    'name' => 'Israel',
                    'description' => 'País en el Medio Oriente, conocido por su historia antigua, su importancia religiosa y su conflicto con Palestina.'
                ],
                [
                    'name' => 'Jamaica',
                    'description' => 'Isla en el Caribe, famosa por su música reggae, sus playas y su cultura vibrante.'
                ],
                [
                    'name' => 'Japón',
                    'description' => 'País insular en el este de Asia, conocido por su tecnología avanzada, su cultura tradicional y su gastronomía.'
                ],
                [
                    'name' => 'Jordania',
                    'description' => 'País en el Medio Oriente, conocido por sus sitios arqueológicos, como Petra, y su papel en la política regional.'
                ],
                [
                    'name' => 'Kazajistán',
                    'description' => 'País en Asia Central, el noveno más grande del mundo por área, conocido por sus vastas estepas y su riqueza en recursos naturales.'
                ],
                [
                    'name' => 'Kenia',
                    'description' => 'País en África Oriental, famoso por sus safaris, su biodiversidad y su vibrante cultura.'
                ],
                [
                    'name' => 'Kirguistán',
                    'description' => 'País montañoso en Asia Central, conocido por su cultura nómada y su belleza natural.'
                ],
                [
                    'name' => 'Kiribati',
                    'description' => 'Nación insular en el Pacífico central, conocida por su vulnerabilidad al cambio climático y su cultura polinesia.'
                ],
                [
                    'name' => 'Kuwait',
                    'description' => 'Pequeño emirato en el Golfo Pérsico, conocido por su riqueza petrolera y su influencia en la política regional.'
                ],
                [
                    'name' => 'Laos',
                    'description' => 'País sin salida al mar en el sudeste asiático, conocido por sus paisajes montañosos y su cultura budista.'
                ],
                [
                    'name' => 'Lesoto',
                    'description' => 'Pequeño reino montañoso en África Austral, completamente rodeado por Sudáfrica, conocido por sus altos altiplanos y su cultura tradicional.'
                ],
                [
                    'name' => 'Letonia',
                    'description' => 'País báltico en el noreste de Europa, conocido por sus paisajes naturales y su rica historia cultural.'
                ],
                [
                    'name' => 'Líbano',
                    'description' => 'País en el Medio Oriente, conocido por su historia antigua, su diversidad religiosa y su gastronomía.'
                ],
                [
                    'name' => 'Liberia',
                    'description' => 'País en África Occidental, fundado por esclavos liberados de América, conocido por su historia tumultuosa y su rica biodiversidad.'
                ],
                [
                    'name' => 'Libia',
                    'description' => 'País en el norte de África, con vastas reservas de petróleo y una historia reciente de conflicto político y social.'
                ],
                [
                    'name' => 'Liechtenstein',
                    'description' => 'Pequeño principado en Europa Central, conocido por su industria financiera y su alto nivel de vida.'
                ],
                [
                    'name' => 'Lituania',
                    'description' => 'País báltico en el noreste de Europa, conocido por su rica historia medieval y su paisaje natural.'
                ],
                [
                    'name' => 'Luxemburgo',
                    'description' => 'Pequeño país en Europa Occidental, conocido por su próspera economía y su papel en la política europea.'
                ],
                [
                    'name' => 'Macedonia del Norte',
                    'description' => 'País en los Balcanes, conocido por su historia antigua y su diversidad étnica.'
                ],
                [
                    'name' => 'Madagascar',
                    'description' => 'Gran isla en el Océano Índico, famosa por su biodiversidad única y su mezcla de culturas africanas y asiáticas.'
                ],
                [
                    'name' => 'Malasia',
                    'description' => 'País en el sudeste asiático, conocido por su diversidad étnica, su economía en crecimiento y sus paisajes naturales.'
                ],
                [
                    'name' => 'Malaui',
                    'description' => 'País sin salida al mar en el sureste de África, conocido por su gran lago y su diversidad cultural.'
                ],
                [
                    'name' => 'Maldivas',
                    'description' => 'Nación insular en el Océano Índico, famosa por sus resorts de lujo y su vulnerabilidad al cambio climático.'
                ],
                [
                    'name' => 'Malí',
                    'description' => 'País en África Occidental, conocido por su historia antigua y sus desafíos socioeconómicos.'
                ],
                [
                    'name' => 'Malta',
                    'description' => 'Pequeño país insular en el Mediterráneo, conocido por su historia antigua y su estratégica ubicación.'
                ],
                [
                    'name' => 'Marruecos',
                    'description' => 'País en el norte de África, conocido por su cultura diversa, sus ciudades históricas y su desierto del Sahara.'
                ],
                [
                    'name' => 'Mauricio',
                    'description' => 'Nación insular en el Océano Índico, conocida por sus playas, su biodiversidad y su estabilidad política.'
                ],
                [
                    'name' => 'Mauritania',
                    'description' => 'País en África Occidental, con vastas extensiones de desierto del Sahara y una economía basada en la minería y la pesca.'
                ],
                [
                    'name' => 'Micronesia',
                    'description' => 'Nación insular en el Pacífico occidental, conocida por su diversidad cultural y su economía basada en la pesca y la agricultura.'
                ],
                [
                    'name' => 'Moldavia',
                    'description' => 'País sin salida al mar en Europa del Este, conocido por su producción de vino y su herencia cultural diversa.'
                ],
                [
                    'name' => 'Mónaco',
                    'description' => 'Pequeño principado en la Riviera francesa, famoso por su casino de Monte Carlo y su estatus de paraíso fiscal.'
                ],
                [
                    'name' => 'Mongolia',
                    'description' => 'País sin salida al mar en Asia Oriental, conocido por sus vastas estepas y su cultura nómada.'
                ],
                [
                    'name' => 'Montenegro',
                    'description' => 'Pequeño país en los Balcanes, conocido por su costa adriática y sus paisajes montañosos.'
                ],
                [
                    'name' => 'Mozambique',
                    'description' => 'País en el sureste de África, conocido por su larga costa en el Océano Índico y su rica biodiversidad marina.'
                ],
                [
                    'name' => 'Namibia',
                    'description' => 'País en el suroeste de África, conocido por su desierto del Namib y su diversa vida silvestre.'
                ],
                [
                    'name' => 'Nauru',
                    'description' => 'Pequeña nación insular en el Pacífico central, conocida por sus depósitos de fosfato y su escaso turismo.'
                ],
                [
                    'name' => 'Nepal',
                    'description' => 'País sin salida al mar en el sur de Asia, famoso por sus montañas del Himalaya y su cultura budista e hindú.'
                ],
                [
                    'name' => 'Nicaragua',
                    'description' => 'País en América Central, conocido por sus lagos y volcanes, y su historia de conflictos civiles.'
                ],
                [
                    'name' => 'Níger',
                    'description' => 'País sin salida al mar en África Occidental, conocido por su vasto desierto del Sahara y sus desafíos de desarrollo.'
                ],
                [
                    'name' => 'Nigeria',
                    'description' => 'País más poblado de África, conocido por su diversidad étnica, su industria petrolera y su cultura vibrante.'
                ],
                [
                    'name' => 'Noruega',
                    'description' => 'País nórdico en Europa del Norte, famoso por sus fiordos, su alto nivel de vida y su industria petrolera.'
                ],
                [
                    'name' => 'Nueva Zelanda',
                    'description' => 'País insular en el Pacífico sur, conocido por sus impresionantes paisajes naturales y su cultura maorí.'
                ],
                [
                    'name' => 'Omán',
                    'description' => 'País en la Península Arábiga, conocido por sus paisajes desérticos y su rica historia marítima.'
                ],
                [
                    'name' => 'Países Bajos',
                    'description' => 'País en Europa Occidental, conocido por sus canales, su arquitectura, sus tulipanes y su enfoque progresista en políticas sociales.'
                ],
                [
                    'name' => 'Palaos',
                    'description' => 'Nación insular en el Pacífico occidental, famosa por su biodiversidad marina y su turismo de buceo.'
                ],
                [
                    'name' => 'Panamá',
                    'description' => 'País en América Central, conocido por su Canal de Panamá, su economía basada en servicios y su biodiversidad.'
                ],
                [
                    'name' => 'Papúa Nueva Guinea',
                    'description' => 'Nación insular en el Pacífico sur, conocida por su diversidad cultural y sus paisajes naturales.'
                ],
                [
                    'name' => 'Paraguay',
                    'description' => 'País sin salida al mar en América del Sur, conocido por su cultura guaraní y su economía agrícola.'
                ],
                [
                    'name' => 'Perú',
                    'description' => 'País en la costa oeste de América del Sur, conocido por su antigua civilización inca y su biodiversidad.'
                ],
                [
                    'name' => 'Polonia',
                    'description' => 'País en Europa Central, conocido por su rica historia, su arquitectura medieval y su resiliencia cultural.'
                ],
                [
                    'name' => 'Portugal',
                    'description' => 'País en el suroeste de Europa, conocido por su historia marítima, su arquitectura y su cultura.'
                ],
                [
                    'name' => 'República Centroafricana',
                    'description' => 'País sin salida al mar en África Central, conocido por su biodiversidad y sus desafíos de desarrollo y estabilidad política.'
                ],
                [
                    'name' => 'República Checa',
                    'description' => 'País en Europa Central, conocido por su rica historia, su arquitectura medieval y su cerveza.'
                ],
                [
                    'name' => 'República Dominicana',
                    'description' => 'País en el Caribe, conocido por sus playas, su música y danza, y su historia compartida con Haití en la isla de La Española.'
                ],
                [
                    'name' => 'Ruanda',
                    'description' => 'País sin salida al mar en África Central, conocido por su historia de genocidio y su recuperación socioeconómica.'
                ],
                [
                    'name' => 'Rumania',
                    'description' => 'País en el sureste de Europa, conocido por su paisaje montañoso, sus castillos y su historia medieval.'
                ],
                [
                    'name' => 'Samoa',
                    'description' => 'Nación insular en el Pacífico Sur, conocida por su cultura polinesia y sus paisajes naturales.'
                ],
                [
                    'name' => 'San Cristóbal y Nieves',
                    'description' => 'Pequeña nación insular en el Caribe, conocida por sus playas y su industria turística.'
                ],
                [
                    'name' => 'San Marino',
                    'description' => 'Pequeño país enclavado en Italia, conocido por su historia antigua y su estatus de república más antigua del mundo.'
                ],
                [
                    'name' => 'San Vicente y las Granadinas',
                    'description' => 'Pequeña nación insular en el Caribe, conocida por sus playas y su producción de plátanos.'
                ],
                [
                    'name' => 'Santa Lucía',
                    'description' => 'Pequeña isla en el Caribe, famosa por sus playas, sus paisajes volcánicos y su cultura criolla.'
                ],
                [
                    'name' => 'Santo Tomé y Príncipe',
                    'description' => 'Pequeño país insular en el Golfo de Guinea, conocido por su biodiversidad y su producción de cacao.'
                ],
                [
                    'name' => 'Senegal',
                    'description' => 'País en África Occidental, conocido por su música, su cultura y su historia como puerta de salida del comercio transatlántico de esclavos.'
                ],
                [
                    'name' => 'Serbia',
                    'description' => 'País en los Balcanes, conocido por su historia tumultuosa y su rica herencia cultural.'
                ],
                [
                    'name' => 'Seychelles',
                    'description' => 'Nación insular en el Océano Índico, conocida por sus playas, su biodiversidad y su turismo de lujo.'
                ],
                [
                    'name' => 'Sierra Leona',
                    'description' => 'País en África Occidental, conocido por su historia de guerra civil y su rica biodiversidad.'
                ],
                [
                    'name' => 'Singapur',
                    'description' => 'Ciudad-estado en el sudeste asiático, famosa por su economía avanzada, su limpieza y su multiculturalismo.'
                ],
                [
                    'name' => 'Somalia',
                    'description' => 'País en el Cuerno de África, conocido por su inestabilidad política y su cultura nómada.'
                ],
                [
                    'name' => 'Sri Lanka',
                    'description' => 'Isla nación en el Océano Índico, conocida por su historia antigua, su cultura budista y sus playas.'
                ],
                [
                    'name' => 'Suazilandia',
                    'description' => 'Pequeño reino en el sur de África, conocido por su cultura tradicional y sus reservas naturales.'
                ],
                [
                    'name' => 'Sudáfrica',
                    'description' => 'País en el extremo sur de África, conocido por su diversidad cultural, sus paisajes variados y su historia del apartheid.'
                ],
                [
                    'name' => 'Sudán',
                    'description' => 'País en el noreste de África, conocido por sus antiguas pirámides y su historia reciente de conflicto.'
                ],
                [
                    'name' => 'Sudán del Sur',
                    'description' => 'El país más nuevo del mundo, en el noreste de África, conocido por su historia de conflicto y su riqueza en petróleo.'
                ],
                [
                    'name' => 'Suecia',
                    'description' => 'País nórdico en Europa del Norte, conocido por su alto nivel de vida, su diseño escandinavo y su historia vikinga.'
                ],
                [
                    'name' => 'Suiza',
                    'description' => 'País en Europa Central, conocido por su neutralidad política, sus bancos y sus Alpes.'
                ],
                [
                    'name' => 'Surinam',
                    'description' => 'País en América del Sur, conocido por su diversidad étnica, su selva tropical y su historia colonial holandesa.'
                ],
                [
                    'name' => 'Tailandia',
                    'description' => 'País en el sudeste asiático, conocido por su cultura vibrante, su gastronomía y sus playas tropicales.'
                ],
                [
                    'name' => 'Tanzania',
                    'description' => 'País en África Oriental, famoso por sus parques nacionales, su monte Kilimanjaro y su costa en el Océano Índico.'
                ],
                [
                    'name' => 'Tayikistán',
                    'description' => 'País montañoso en Asia Central, conocido por su historia antigua y su cultura persa.'
                ],
                [
                    'name' => 'Timor Oriental',
                    'description' => 'Nación insular en el sudeste asiático, conocida por su lucha por la independencia y su cultura diversa.'
                ],
                [
                    'name' => 'Togo',
                    'description' => 'País en África Occidental, conocido por su diversidad étnica y su economía agrícola.'
                ],
                [
                    'name' => 'Tonga',
                    'description' => 'Nación insular en el Pacífico Sur, conocida por su cultura polinesia y su monarquía.'
                ],
                [
                    'name' => 'Trinidad y Tobago',
                    'description' => 'Nación insular en el Caribe, conocida por su carnaval, su música calipso y su industria energética.'
                ],
                [
                    'name' => 'Túnez',
                    'description' => 'País en el norte de África, conocido por su historia antigua, su cultura árabe y sus playas mediterráneas.'
                ],
                [
                    'name' => 'Turkmenistán',
                    'description' => 'País en Asia Central, conocido por sus vastos desiertos y su riqueza en gas natural.'
                ],
                [
                    'name' => 'Tuvalu',
                    'description' => 'Pequeña nación insular en el Pacífico central, conocida por su vulnerabilidad al cambio climático y su cultura polinesia.'
                ],
                [
                    'name' => 'Ucrania',
                    'description' => 'País en Europa del Este, conocido por su historia tumultuosa, su cultura eslava y su importancia geopolítica reciente.'
                ],
                [
                    'name' => 'Uganda',
                    'description' => 'País en África Oriental, conocido por su biodiversidad, sus parques nacionales y su historia de conflictos.'
                ],
                [
                    'name' => 'Uruguay',
                    'description' => 'País en América del Sur, conocido por su estabilidad política, su cultura ganadera y su litoral atlántico.'
                ],
                [
                    'name' => 'Uzbekistán',
                    'description' => 'País en Asia Central, conocido por su historia como parte de la Ruta de la Seda y su arquitectura islámica.'
                ],
                [
                    'name' => 'Vanuatu',
                    'description' => 'Nación insular en el Pacífico Sur, conocida por su cultura melanesia y sus actividades de aventura.'
                ],
                [
                    'name' => 'Vaticano',
                    'description' => 'Pequeña ciudad-estado enclavada en Roma, Italia, sede de la Iglesia Católica y hogar del Papa.'
                ],
                [
                    'name' => 'Venezuela',
                    'description' => 'País en América del Sur, conocido por sus vastas reservas de petróleo y su reciente crisis política y económica.'
                ],
                [
                    'name' => 'Vietnam',
                    'description' => 'País en el sudeste asiático, conocido por su historia de guerra, su cultura vibrante y su economía en crecimiento.'
                ],
                [
                    'name' => 'Yemen',
                    'description' => 'País en la Península Arábiga, conocido por su historia antigua y su conflicto civil en curso.'
                ],
                [
                    'name' => 'Yibuti',
                    'description' => 'Pequeño país en el Cuerno de África, conocido por su ubicación estratégica y su base militar internacional.'
                ],
                [
                    'name' => 'Zambia',
                    'description' => 'País sin salida al mar en África Austral, conocido por sus parques nacionales y sus reservas de cobre.'
                ],
                [
                    'name' => 'Zimbabue',
                    'description' => 'País en África Austral, conocido por sus ruinas arqueológicas y su historia reciente de inestabilidad económica y política.'
                ]
            ];


        // Inserta los datos en la tabla
        foreach ($countryData as $data) {
            Country::create($data);
        }
    }
}

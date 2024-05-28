<?php

namespace Database\Seeders;

use App\Models\Mission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $missionData = [
            [
                'title' => 'Operación Tormenta',
                'subtitle' => 'Infiltración en territorio enemigo',
                'description' => 'Misión encubierta para obtener información crucial sobre las actividades enemigas.',
                'date' => '2024-04-10',
                'status' => 'En progreso',
                'type' => 'Reconocimiento',
                'priority' => 'Alta',
                'objective' => 'Recopilar datos sobre posiciones enemigas',
                'action' => 'Infiltración sigilosa en territorio enemigo',
                'result' => 'En progreso',
                // 'photo' => 'https://www.eltiempo.com/files/image_640_428/uploads/2022/07/15/62f7c4b7e8f6f.jpeg',
                'photo' => Storage::url('Images/ImagesRelleno/barco.jpg'),
                'army_id' => 3,
                'destination_id' => 3,
                'user_id' => 1,
            ],
            [
                'title' => 'Operación Vigilancia Costera',
                'subtitle' => 'Patrulla marítima',
                'description' => 'Misión de vigilancia para asegurar las aguas territoriales y detectar actividades sospechosas.',
                'date' => '2024-04-15',
                'status' => 'Planificado',
                'type' => 'Patrulla',
                'priority' => 'Media',
                'objective' => 'Detectar y reportar cualquier actividad no autorizada en el mar',
                'action' => 'Realizar patrullas regulares a lo largo de la costa designada',
                'result' => 'En espera de ejecución',
                // 'photo' => 'https://www.eltiempo.com/files/image_640_428/uploads/2022/07/15/62f7c4b7e8f6f.jpeg',
                'photo' => Storage::url('Images/ImagesRelleno/barco.jpg'),
                'army_id' => 2,
                'destination_id' => 2,
                'user_id' => 2,
            ],
            [
                'title' => 'Operación Vigilancia Nocturna',
                'subtitle' => 'Patrullaje en áreas sensibles',
                'description' => 'Misión de vigilancia nocturna para monitorear actividades sospechosas en la frontera.',
                'date' => '2024-05-05',
                'status' => 'Pendiente',
                'type' => 'Patrulla',
                'priority' => 'Media',
                'objective' => 'Detectar movimientos ilegales en la frontera',
                'action' => 'Patrullaje sigiloso en áreas designadas',
                'result' => 'Sin novedades hasta el momento',
                // 'photo' => 'https://www.eltiempo.com/files/image_640_428/uploads/2022/07/15/62f7c4b7e8f6f.jpeg',
                'photo' => Storage::url('Images/ImagesRelleno/barco.jpg'),
                'army_id' => 3,
                'destination_id' => 4,
                'user_id' => 2,
            ],
            [
                'title' => 'Misión Marítima en el Cantábrico',
                'subtitle' => 'Vigilancia y Seguridad Marítima',
                'description' => 'El patrullero de altura "Atalaya" llevó a cabo dos misiones de Vigilancia y Seguridad Marítima desde el sábado 13 de abril, protegiendo los espacios marítimos de soberanía e interés nacional.',
                'date' => '2024-05-06',
                'status' => 'Concluida',
                'type' => 'Seguridad Marítima',
                'priority' => 'Alta',
                'objective' => 'Proteger los espacios marítimos nacionales',
                'action' => 'Vigilancia del tráfico marítimo, supervisión pesquera, protección de rutas marítimas',
                'result' => 'Concluida',
                // 'photo' => 'https://www.eltiempo.com/files/image_640_428/uploads/2022/07/15/62f7c4b7e8f6f.jpeg',
                'photo' => Storage::url('Images/ImagesRelleno/barco.jpg'),
                'army_id' => 4,
                'destination_id' => 4,
                'user_id' => 3,
            ],
            [
                'title' => 'Ejercicio Multinacional en el Mediterráneo: ESP MINEX-24',
                'subtitle' => 'Guerra de Minas',
                'description' => 'La Armada Española lidera el ejercicio multinacional avanzado "ESP MINEX-24" en aguas del archipiélago balear, con la participación de 13 buques de superficie, un helicóptero SH60B de la Armada y equipos especializados de Bélgica, Estados Unidos y España.',
                'date' => '2024-05-02',
                'status' => 'En progreso',
                'type' => 'Guerra de Minas',
                'priority' => 'Alta',
                'objective' => 'Fortalecer cooperación y interoperabilidad en detección y neutralización de minas marinas',
                'action' => 'Realización de ejercicios de detección y neutralización de minas marinas',
                'result' => 'En progreso',
                // 'photo' => 'https://www.eltiempo.com/files/image_640_428/uploads/2022/07/15/62f7c4b7e8f6f.jpeg',
                'photo' => Storage::url('Images/ImagesRelleno/barco.jpg'),
                'army_id' => 3,
                'destination_id' => 5,
                'user_id' => 2,
            ],
            // Puedes agregar más misiones aquí según tus necesidades
        ];
        foreach ($missionData as $data) {
            Mission::create($data);
        }
    }
}

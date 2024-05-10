<?php

namespace Database\Seeders;

use App\Models\Mission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'army_id' => 1,
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
                'army_id' => 2,
                'destination_id' => 4,
                'user_id' => 2,
            ],
            
            // Puedes agregar más misiones aquí según tus necesidades
        ];
        Mission::insert($missionData);
    }
}

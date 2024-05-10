<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolData = [
            [
                'name' => 'user',
                'description' => 'Rol estándar para los usuarios registrados. Tienen acceso básico a las funcionalidades del sistema.',
            ],
            [
                'name' => 'admin',
                'description' => 'Rol de administrador con privilegios ampliados. Tienen acceso completo a todas las funcionalidades del sistema y pueden gestionar usuarios, configuraciones y contenido.',
            ],
        ];
        foreach ($rolData as $data) {
            Rol::create($data);
        }
    }
}

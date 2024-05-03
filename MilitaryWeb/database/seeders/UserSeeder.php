<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'DNI' => '12345678A',
                'name' => 'Juan Antonio',
                'surname' => 'García Castro',
                'sex' => 'M',
                'birthdate' => '1990-05-15',
                'password' => bcrypt(12345678), //bcrypt('contraseña123'), // Asegúrate de cifrar la contraseña correctamente
                'email' => 'juan@gmail.com',
                'phone' => 123456789,
                'town' => 'Madrid',
                'municipality' => 'Madrid',
                'entry_army_date' => '2010-07-20',
                'verified' => true,
                'range_id' => 1, // ID del rango del usuario
                'rol_id' => 2, // ID del rol del usuario
                'army_id' => 1, // ID del ejército al que pertenece el usuario
            ],
            [
                'DNI' => '12345678B',
                'name' => 'Juan David',
                'surname' => 'Fernandez Pino',
                'sex' => 'M',
                'birthdate' => '1989-05-16',
                'password' => bcrypt(12345678), //bcrypt('contraseña123'), // Asegúrate de cifrar la contraseña correctamente
                'email' => 'pino@gmail.com',
                'phone' => 123456789,
                'town' => 'Malaga',
                'municipality' => 'Malaga',
                'entry_army_date' => '2010-07-20',
                'verified' => true,
                'range_id' => 1, // ID del rango del usuario
                'rol_id' => 2, // ID del rol del usuario
                'army_id' => 2, // ID del ejército al que pertenece el usuario
            ],
            [
                'DNI' => '12345678C',
                'name' => 'Antonio Jesus',
                'surname' => 'Aguayo Guerrero',
                'sex' => 'M',
                'birthdate' => '1990-08-21',
                'password' => bcrypt(12345678), //bcrypt('contraseña123'), // Asegúrate de cifrar la contraseña correctamente
                'email' => 'aguayo@gmail.com',
                'phone' => 123456789,
                'town' => 'Barcelona',
                'municipality' => 'Barcelona',
                'entry_army_date' => '2015-06-02',
                'verified' => true,
                'range_id' => 1, // ID del rango del usuario
                'rol_id' => 2, // ID del rol del usuario
                'army_id' => 3, // ID del ejército al que pertenece el usuario
            ],
            [
                'DNI' => '87654321B',
                'name' => 'María',
                'surname' => 'López',
                'sex' => 'F',
                'birthdate' => '1988-09-25',
                'password' => 12345678, //bcrypt('password123'),
                'email' => 'maria@gmail.com',
                'phone' => 987654321,
                'town' => 'Bilbao',
                'municipality' => 'Bilbao',
                'entry_army_date' => '2012-04-10',
                'verified' => true,
                'range_id' => 1,
                'rol_id' => 1,
                'army_id' => 1,
            ],
            // Puedes agregar más usuarios aquí según tus necesidades
        ];
        User::insert($userData);
    }
}

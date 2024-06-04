<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'DNI' => $this->faker->regexify('[0-9]{8}[A-Z]'),
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'sex' => $this->faker->randomElement(['M', 'F']),
            'birthdate' => $this->faker->date('Y-m-d', '-18 years'),
            'password' => bcrypt('password'), // Passwords siempre serán 'password' por simplicidad en las pruebas
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->numerify('#########'),
            'town' => $this->faker->city,
            'province' => $this->faker->city,
            'entry_army_date' => $this->faker->date('Y-m-d', '-10 years'),
            'profile_photo_path' => 'fotoUsers.png',
            'verified' => $this->faker->boolean(50), // 90% de probabilidad de que estén verificados
            'range_id' => $this->faker->numberBetween(1, 15), // ID del rango del usuario
            'rol_id' => 1, // ID del rol del usuario
            'army_id' => $this->faker->numberBetween(2, 4), // ID del ejército al que pertenece el usuario
        ];
    }
}

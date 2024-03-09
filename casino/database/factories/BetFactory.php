<?php

namespace Database\Factories;

use App\Models\Bet;
use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bet>
 */
class BetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bet::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::pluck('id')->toArray();
        $gameId = Game::pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($userId),
            'game_id' => $this->faker->randomElement($gameId),
            'description_bet' => $this->faker->sentence(1),
            'amount_bet' => $this->faker->numberBetween(10, 100),
        ];
    }

    // $apuestas = [
    //     'Straight Up' ,
    //     'Split' ,
    //     'Street' ,
    //     'Corner o Square' ,
    //     'Line o Double Street',
    //     'Dozens',
    //     'Columns',
    //     'Rojo/Negro',
    //     'Pares/Impares',
    //     'Alto/Bajo',
    // ];
    // $tipos_apuestas = [
    //     'Carta alta',
    //     'Par',
    //     'Doble par',
    //     'Trio',
    //     'Escalera',
    //     'Color',
    //     'Full',
    //     'Poker',
    //     'Escalera de color',
    //     'Escalera real'
    // ];

}

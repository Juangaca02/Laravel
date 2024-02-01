<?php

namespace Database\Seeders;

use App\Models\Fruta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('frutas')->delete();

        DB::table('frutas')->insert([
            ['nombreFruta' => 'Rimuru Tempest', 'temporada' => '2', 'pais' => 'Federación de Jura Tempest'],
            ['nombreFruta' => 'Kaguya Shinomiya', 'temporada' => '3', 'pais' => 'Japon'],
            ['nombreFruta' => 'Asuna Yuuki', 'temporada' => '1', 'pais' => 'Sword Art Online'],
            ['nombreFruta' => 'Kazuto Kirigaya', 'temporada' => '1', 'pais' => 'Sword Art Online'],
            ['nombreFruta' => 'Alice Schuberg', 'temporada' => '4', 'pais' => 'UnderWorld'],
        ]);

        $fruta = new Fruta;
        $fruta->nombreFruta = "Marin Kitagawa";
        $fruta->temporada = "1";
        $fruta->pais = "Japon";
        $fruta->save();

        $fruta = new Fruta;
        $fruta->nombreFruta = "Rias Gremory";
        $fruta->temporada = "2";
        $fruta->pais = "Inframundo";
        $fruta->save();

        $fruta = new Fruta;
        $fruta->nombreFruta = "Violet Evergarden";
        $fruta->temporada = "1";
        $fruta->pais = "England";
        $fruta->save();

    }
}

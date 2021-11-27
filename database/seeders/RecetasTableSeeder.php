<?php

namespace Database\Seeders;

use App\Models\Ingrediente;
use App\Models\Receta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recetas')->insert([
            'titulo' => 'Arroz con leche',
            'instrucciones' => '1. Echar agua, 2. iassasdad, . 3.dsfsdfsdf',
            'id_instrucciones' => 1
        ]);
    }
}

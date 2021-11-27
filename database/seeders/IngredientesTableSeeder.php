<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredientes')->insert([
            'nombre' => 'Pimineta',
            'porcion' => '1 cucharada',
            'unidad_medida' => 'cuchara'
        ]);
    }
}

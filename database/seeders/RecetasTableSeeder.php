<?php

namespace Database\Seeders;

use App\Models\Ingrediente;
use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idFound = Ingrediente::orderBy('id', 'DESC')->first('id');

        DB::table('recetas')->insert([
            'titulo' => Str::random(10),
            'instrucciones' => Str::random(20),
            'id_ingredientes' => $idFound['id'],
        ]);
    }
}

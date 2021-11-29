<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VueloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vuelos')->insert([
            'numVuelo' => 1,
            'idAvion' => 1,
            'idAeropuerto' => 1
        ]);
    }
}

<?php

namespace Database\Factories;

use App\Models\Ingrediente;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $idFound = Ingrediente::orderBy('id', 'DESC')->first('id');
        
        
        return [
            'titulo' => $this->faker->title(),
            'instrucciones' => $this->faker->paragraph(),
            'id_ingredientes' => $idFound['id'],
        ];
    }
}

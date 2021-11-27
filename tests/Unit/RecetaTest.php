<?php

namespace Tests\Unit;

use App\Models\Ingrediente;
use App\Models\Receta;
use Tests\TestCase;

class RecetaTest extends TestCase
{
    public function test_prueba_crear_receta()
    {
        $recetaEsperada = Receta::factory()->count(1)->make();
        $this->assertTrue($recetaEsperada != null);
    }
}

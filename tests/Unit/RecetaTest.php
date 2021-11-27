<?php

namespace Tests\Unit;

use App\Models\Ingrediente;
use App\Models\Receta;
use PHPUnit\Framework\TestCase;

class RecetaTest extends TestCase
{
    public function test_prueba_crear_receta()
    {
        $recetaEsperada = Receta::make([
            'titulo' => 'hola',
            'instrucciones' => 'hola',
            'id_ingredientes' => 2
        ]);

        $recetaObtenida = Receta::make([
            'titulo' => 'hola',
            'instrucciones' => 'hola',
            'id_ingredientes' => 2
        ]);

        $this->assertTrue($recetaEsperada->titulo == $recetaObtenida->titulo);
    }
}

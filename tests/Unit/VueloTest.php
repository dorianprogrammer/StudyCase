<?php

namespace Tests\Unit;

use App\Models\Avion;
use App\Models\Vuelo;
use PHPUnit\Framework\TestCase;

class VueloTest extends TestCase
{
    public function test_prueba_crear_vuelo()
    {
        $VueloEsperado = Vuelo::factory()->count(1)->make();
        $this->assertTrue($VueloEsperado != null);
    }
}

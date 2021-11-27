<?php

namespace Tests\Unit;

use App\Models\Aeropuerto;
use PHPUnit\Framework\TestCase;

class AeropuertoTest extends TestCase
{
    public function test_prueba_crear_aeropuerto()
    {
        $AeropuertoEsperado = Aeropuerto::factory()->count(1)->make();
        $this->assertTrue($AeropuertoEsperado != null);
    }
}

<?php

namespace Tests\Unit;

use App\Models\Avion;
use PHPUnit\Framework\TestCase;

class AvionTest extends TestCase
{
    public function test_prueba_crear_avion()
    {
        $AvionEsperado = Avion::factory()->count(1)->make();
        $this->assertTrue($AvionEsperado != null);
    }
}


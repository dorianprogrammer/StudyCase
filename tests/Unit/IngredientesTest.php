<?php

namespace Tests\Unit;

use App\Models\Ingrediente;
use App\Models\User;
use Tests\TestCase;

class IngredientesTest extends TestCase
{
    public function test_puede_crear_ingredientes()
    {
        $ingrediente = Ingrediente::factory()->count(1)->make();
        $this->assertTrue($ingrediente != null);
    }
}

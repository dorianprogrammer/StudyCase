<?php

namespace Tests\Unit;

use App\Models\Ingrediente;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class IngredientesTest extends TestCase
{
    public function test_puede_crear_ingredientes()
    {
        $user = User::factory()->count(1)->make();
        $user = User::first();

        $this->assertTrue($user != null);
    }
}

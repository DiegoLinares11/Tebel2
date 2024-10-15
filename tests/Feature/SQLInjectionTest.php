<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SQLInjectionTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function test_sql_injection_protection()
    {
        // Intentar enviar una inyección SQL en el campo de título
        $response = $this->post('/login', [
            'username' => "' or '1' = '1",
            'password' => '1234',
        ]);

        // Verificar que no ocurra una excepción de SQL y el código devuelva un error válido
        $response->assertStatus(302); // Código de error por entrada inválida, Se usa 302 para determinar si hizo el redirect o no.
    }
}

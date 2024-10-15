<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SecurityFeatureTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function test_csrf_protection()
    {
        // Simular un intento de enviar una solicitud POST sin el token CSRF
        $response = $this->post('/backend/signup', [
            'title' => 'Test title',
            'content' => 'Test content',
        ]);

        // Verificar que la solicitud sea rechazada
        $response->assertStatus(419); // Código 419 significa que no hay token CSRF
    }
}

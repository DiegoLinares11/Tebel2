<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthFeatureTestShpments extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function test_unauthenticated_user_cannot_access_protected_routes()
    {
        // Simular que un usuario no autenticado intenta acceder a una ruta protegida
        $response = $this->get('/backend/shipments');

        // Verificar que la solicitud sea redirigida al login
        $response->assertRedirect('/login');
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RateLimitingTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function test_login_rate_limiting()
    {
        // Intentar varios inicios de sesión fallidos
        for ($i = 0; $i < 10; $i++) {
            $response = $this->post('/login', [
                'email' => 'invalid@example.com',
                'password' => 'invalidpassword',
            ]);
        }

        // Verificar que después de varios intentos, se bloquea el acceso temporalmente
        $response = $this->post('/login', [
            'email' => 'invalid@example.com',
            'password' => 'invalidpassword',
        ]);

        // Verificar que el código de respuesta sea 429 (Too Many Requests)
        $response->assertStatus(429); // Código 429 significa "Too Many Requests"
    }
}

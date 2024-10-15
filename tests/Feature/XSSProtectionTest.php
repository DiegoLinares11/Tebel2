<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class XSSProtectionTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function test_xss_protection()
    {
        // Intentar crear un post con un script de XSS en el título
        $response = $this->post('/posts', [
            'title' => '<script>alert("XSS")</script>',
            'content' => 'Test content',
        ]);

        // Verificar que el contenido sea escapado en la vista y no se ejecute el script malicioso
        $response->assertDontSee('<script>alert("XSS")</script>', false);
    }
}

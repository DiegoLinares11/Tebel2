<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewsTest extends TestCase
{
    /**
     * Test the index view.
     *
     * @return void
     */
    public function testIndexView()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.index');
    }

    /**
     * Test the products view.
     *
     * @return void
     */
    public function testProductsView()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.products');
    }

    /**
     * Test the contact view.
     *
     * @return void
     */
    public function testContactView()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.contact');
    }

    public function testIndexViewContent()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.products');
        $response->assertSee('Producto 1');
        $response->assertSee('$0.00');
    }

}
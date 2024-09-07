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

    /**
     * Test the login view.
     *
     * @return void
     */
    public function testLoginView()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.login');
    }

    /**
     * Test the contact view.
     *
     * @return void
     */
    public function testAboutView()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.about');
    }

    /**
     * Test the contact view.
     *
     * @return void
     */
    public function testSignUpView()
    {
        $response = $this->get('/signup');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.signup');
    }

    public function testIndexViewContent()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.products');
        $response->assertSee('Producto 1');
        $response->assertSee('$0.00');
    }

    public function testContactViewContent()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.contact');
        $response->assertSee('Contactanos');
        $response->assertSee('Enviar mensaje');
    }

    public function testAboutViewContent()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.about');
        $response->assertSee('About Us');
        $response->assertSee('Expart Management Team');
    }
}
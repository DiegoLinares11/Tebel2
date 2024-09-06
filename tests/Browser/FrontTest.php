<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FrontTest extends DuskTestCase
{
    /**
     * Test the index page for expected content.
     *
     * @return void
     */
    public function testIndexPage()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("/")
                ->assertSee("First text")
                ->assertSee("Trending");
        });
    }

    /**
     * Test the products page for expected content.
     *
     * @return void
     */
    public function testProductsPage()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("/products")
                ->assertSee("Producto 2")
                ->assertSee('$0.00');
        });
    }
}

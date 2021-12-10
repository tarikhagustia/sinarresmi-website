<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeRenderTest extends TestCase
{
    public function test_home_view()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('welcome');
    }

    public function test_about_us_view()
    {
        $response = $this->get('/about-us');

        $response->assertStatus(200);
        $response->assertViewIs('about');
    }

    public function test_events_view()
    {
        $response = $this->get('/events');

        $response->assertStatus(200);
        $response->assertViewIs('events');
    }

    public function test_contact_us_view()
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
        $response->assertViewIs('contact-us');
    }

    public function test_products_view()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('products.index');
    }

    public function test_products_original_check_view_with_parameters()
    {
        $response = $this->get('/products/original-check/1');

        $response->assertStatus(200);
        $response->assertViewIs('products.original');
    }

    public function test_products_original_check_view_without_parameters()
    {
        $response = $this->get('/products/original-check');

        $response->assertStatus(404);
    }

    public function test_bookings_view()
    {
        $response = $this->get('/bookings');

        $response->assertRedirect('/');
    }
}

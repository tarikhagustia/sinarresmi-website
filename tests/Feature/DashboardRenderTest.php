<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardRenderTest extends TestCase
{    
    use RefreshDatabase;

    protected function getDashboard(string $url)
    {
        $this->prefix = '/dashboard';
        return $this->prefix.$url;
    }

    protected function login()
    {
        $this->user = User::factory()->create();
        $this->userData = array_merge($this->user->toArray(), ['password' => 'password']);
        $this->post('/login', $this->userData);
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->login();
    }

    public function tearDown(): void
    {
        User::destroy($this->user['id']);
    }

    public function test_dashboard_index_view()
    {
        $response = $this->get($this->getDashboard('/'));

        $response->assertStatus(200);
    }

    public function test_dashboard_index_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->get($this->getDashboard('/'));

        $response->assertStatus(302);
    }
}

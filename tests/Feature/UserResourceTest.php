<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserResourceTest extends TestCase
{
    use DatabaseTransactions;

    protected function mockUser()
    {
        $this->testUser = User::factory()->create();
    }

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
        $this->mockUser();
    }

    public function tearDown(): void
    {
        User::destroy($this->user['id']);
    }

    public function test_dashboard_users_index_view()
    {
        $response = $this->get($this->getDashboard('/users'));

        $response->assertStatus(200);
    }

    public function test_dashboard_users_index_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->get($this->getDashboard('/users'));

        $response->assertStatus(302);
    }

    // public function test_dashboard_users_show_view()
    // {
    //     $response = $this->get($this->getDashboard('/users/'.$this->user['id']));

    //     $response->assertStatus(200);
    // }

    // public function test_dashboard_users_show_view_with_no_user()
    // {
    //     $this->post('/logout');

    //     $response = $this->get($this->getDashboard('/users/'.$this->user['id']));

    //     $response->assertStatus(302);
    // }

    public function test_dashboard_users_create_view()
    {
        $response = $this->get($this->getDashboard('/users/create'));

        $response->assertStatus(200);
    }

    public function test_dashboard_users_create_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->get($this->getDashboard('/users/create'));

        $response->assertStatus(302);
    }

    public function test_dashboard_users_store_view()
    {
        $response = $this->post($this->getDashboard('/users'), [
            'name' => 'Test User',
            'email' => 'test123456@gmail.com',
            'password' => 'test123456',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect($this->getDashboard('/users'));
    }

    public function test_dashboard_users_store_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->post($this->getDashboard('/users'), [
            'name' => 'Test User',
            'email' => 'test123456@gmail.com',
            'password' => 'test123456',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_dashboard_users_edit_view()
    {
        $response = $this->get($this->getDashboard('/users/'.$this->testUser->id.'/edit'));

        $response->assertStatus(200);
    }

    public function test_dashboard_users_edit_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->get($this->getDashboard('/users/'.$this->testUser->id.'/edit'));

        $response->assertStatus(302);
    }

    public function test_dashboard_users_update_view()
    {
        $response = $this->put($this->getDashboard('/users/'.$this->testUser->id), [
            'name' => 'Test User',
            'email' => 'test1234567@gmail.com',
            'password' => 'test1234567',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect($this->getDashboard('/users'));
    }

    public function test_dashboard_users_update_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->put($this->getDashboard('/users/'.$this->testUser->id), [
            'name' => 'Test User',
            'email' => 'test1234567@gmail.com',
            'password' => 'test1234567',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_dashboard_users_destroy_view()
    {
        $response = $this->delete($this->getDashboard('/users/'.$this->testUser->id));

        $response->assertStatus(302);
        $response->assertRedirect($this->getDashboard('/users'));
    }

    public function test_dashboard_users_destroy_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->delete($this->getDashboard('/users/'.$this->testUser->id));

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
}

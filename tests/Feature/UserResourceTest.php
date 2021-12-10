<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\ResourceTestCase;

class UserResourceTest extends ResourceTestCase
{
    protected function mockUser()
    {
        $this->testUser = User::factory()->create();
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->mockUser();
    }

    public function test_dashboard_users_index_view()
    {
        $response = $this->get(route('dashboard.users.index'));

        $response->assertStatus(200);
    }

    public function test_dashboard_users_index_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->get(route('dashboard.users.index'));

        $response->assertStatus(302);
    }

    // public function test_dashboard_users_show_view()
    // {
    //     $response = $this->get('/dashboard/users/'.$this->user['id']);

    //     $response->assertStatus(200);
    // }

    // public function test_dashboard_users_show_view_with_no_user()
    // {
    //     $this->post(route('logout'));

    //     $response = $this->get('/dashboard/users/'.$this->user['id']);

    //     $response->assertStatus(302);
    // }

    public function test_dashboard_users_create_view()
    {
        $response = $this->get(route('dashboard.users.create'));

        $response->assertStatus(200);
    }

    public function test_dashboard_users_create_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->get(route('dashboard.users.create'));

        $response->assertStatus(302);
    }

    public function test_dashboard_users_store_view()
    {
        $response = $this->post(route('dashboard.users.store'),[
            'name' => 'Test User',
            'email' => 'test123456@gmail.com',
            'password' => 'test123456',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('dashboard.users.index'));
    }

    public function test_dashboard_users_store_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->post(route('dashboard.users.store'), [
            'name' => 'Test User',
            'email' => 'test123456@gmail.com',
            'password' => 'test123456',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    public function test_dashboard_users_edit_view()
    {
        $response = $this->get(route('dashboard.users.edit', $this->testUser->id));

        $response->assertStatus(200);
    }

    public function test_dashboard_users_edit_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->get(route('dashboard.users.edit', $this->testUser->id));

        $response->assertStatus(302);
    }

    public function test_dashboard_users_update_view()
    {
        $response = $this->put(route('dashboard.users.update', $this->testUser->id), [
            'name' => 'Test User',
            'email' => 'test1234567@gmail.com',
            'password' => 'test1234567',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('dashboard.users.index'));
    }

    public function test_dashboard_users_update_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->put(route('dashboard.users.update', $this->testUser->id), [
            'name' => 'Test User',
            'email' => 'test1234567@gmail.com',
            'password' => 'test1234567',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    public function test_dashboard_users_destroy_view()
    {
        $response = $this->delete(route('dashboard.users.destroy', $this->testUser->id));

        $response->assertStatus(302);
        $response->assertRedirect(route('dashboard.users.index'));
    }

    public function test_dashboard_users_destroy_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->delete(route('dashboard.users.destroy', $this->testUser->id));

        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }
}

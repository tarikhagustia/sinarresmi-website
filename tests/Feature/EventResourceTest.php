<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\ResourceTestCase;

class EventResourceTest extends ResourceTestCase
{
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();
        $this->events = Event::factory()->create([
            'status' => 'pending'
        ]);
    }

    public function tearDown(): void
    {
        parent::tearDown();

        $this->events->delete();
    }

    public function test_dashboard_event_index()
    {
        $response = $this->get(route('dashboard.events.index'));

        $response->assertStatus(200);
    }

    public function test_dashboard_event_create()
    {
        $response = $this->get(route('dashboard.events.create'));

        $response->assertStatus(200);
    }

    public function test_dashboard_event_create_no_user()
    {
        $this->post(route('logout'));

        $response = $this->get(route('dashboard.events.create'));

        $response->assertStatus(302);
    }

    public function test_dashboard_event_store()
    {
        $this->get(route('dashboard.events.index'));

        $response = $this->post(route('dashboard.events.store'), [
            'title' => 'Test Event',
            'description' => 'Test Description',
            'date_start' => '2020-01-01',
            'date_end' => '2020-01-01',
            'image' => '/random/image.jpg',
            'status' => 'pending',
        ]);

        $response->assertStatus(302);

        $response->assertRedirect(route('dashboard.events.index'));
    }

    public function test_dashboard_event_store_no_user()
    {
        $this->post(route('logout'));

        $response = $this->post(route('dashboard.events.store'), [
            'title' => 'Test Event',
            'description' => 'Test Description',
            'date_start' => '2020-01-01',
            'date_end' => '2020-01-01',
            'image' => '/random/image.jpg',
            'status' => 'pending',
        ]);

        $response->assertStatus(302);
    }

    public function test_dashboard_event_show()
    {
        $response = $this->get(route('dashboard.events.show', $this->events->id));

        $response->assertStatus(200);
    }

    public function test_dashboard_event_show_no_user()
    {
        $this->post(route('logout'));

        $response = $this->get(route('dashboard.events.show', $this->events->id));

        $response->assertStatus(302);
    }

    public function test_dashboard_event_edit()
    {
        $response = $this->get(route('dashboard.events.edit', $this->events->id));

        $response->assertStatus(200);
    }

    public function test_dashboard_event_edit_no_user()
    {
        $this->post(route('logout'));

        $response = $this->get(route('dashboard.events.edit', $this->events->id));

        $response->assertStatus(302);
    }

    public function test_dashboard_event_update()
    {
        $this->get(route('dashboard.events.index'));

        $response = $this->put(route('dashboard.events.update', $this->events->id), [
            'title' => 'Test Event',
            'description' => 'Test Description',
            'date_start' => '2020-01-01',
            'date_end' => '2020-01-01',
            'image' => '/random/image.jpg',
            'status' => 'pending',
        ]);

        $response->assertStatus(302);

        $response->assertRedirect(route('dashboard.events.index'));
    }

    public function test_dashboard_event_update_no_user()
    {
        $this->post(route('logout'));

        $response = $this->put(route('dashboard.events.update', $this->events->id), [
            'title' => 'Test Event',
            'description' => 'Test Description',
            'date_start' => '2020-01-01',
            'date_end' => '2020-01-01',
            'image' => '/random/image.jpg',
            'status' => 'pending',
        ]);

        $response->assertStatus(302);
    }

    public function test_dashboard_event_destroy()
    {
        $response = $this->delete(route('dashboard.events.destroy', $this->events->id));

        $response->assertStatus(302);

        $this->assertDatabaseMissing('events', [
            'id' => $this->events->id,
        ]);

        $response->assertRedirect(route('dashboard.events.index'));
    }

    public function test_dashboard_event_destroy_no_user()
    {
        $this->post(route('logout'));

        $response = $this->delete(route('dashboard.events.destroy', $this->events->id));

        $response->assertStatus(302);
    }
}

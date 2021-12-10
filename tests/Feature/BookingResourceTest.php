<?php

namespace Tests\Feature;

use App\Models\Booking;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingResourceTest extends DashboardRenderTest
{
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();
        $this->booking = Booking::factory()->create();
    }

    public function test_dashboard_bookings_index_view()
    {
        $response = $this->get($this->getDashboard('/bookings'));

        $response->assertStatus(200);
    }

    public function test_dashboard_bookings_index_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->get($this->getDashboard('/bookings'));

        $response->assertStatus(302);
    }

    public function test_dashboard_bookings_show_view()
    {
        $response = $this->get($this->getDashboard('/bookings/'.$this->booking['id']));

        $response->assertStatus(200);
    }

    public function test_dashboard_bookings_show_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->get($this->getDashboard('/bookings/'.$this->booking['id']));

        $response->assertStatus(302);
    }

    public function test_dashboard_bookings_destroy_view()
    {
        $response = $this->delete($this->getDashboard('/bookings/'.$this->booking['id']));

        $response->assertStatus(302);
        $this->assertDatabaseMissing('bookings', $this->booking->toArray());
        $response->assertRedirect($this->getDashboard('/bookings'));
    }

    public function test_dashboard_bookings_destroy_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->delete($this->getDashboard('/bookings/'.$this->booking['id']));

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
}

<?php

namespace Tests\Feature;

use App\Models\Booking;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\ResourceTestCase;

class BookingResourceTest extends ResourceTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->booking = Booking::factory()->create();
    }

    public function test_dashboard_bookings_index_view()
    {
        $response = $this->get(route('dashboard.bookings.index'));

        $response->assertStatus(200);
    }

    public function test_dashboard_bookings_index_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->get(route('dashboard.bookings.index'));

        $response->assertStatus(302);
    }

    public function test_dashboard_bookings_show_view()
    {
        $response = $this->get(route('dashboard.bookings.show', $this->booking->id));

        $response->assertStatus(200);
    }

    public function test_dashboard_bookings_show_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->get(route('dashboard.bookings.show', $this->booking->id));

        $response->assertStatus(302);
    }

    public function test_dashboard_bookings_destroy_view()
    {
        $response = $this->delete(route('dashboard.bookings.destroy', $this->booking->id));

        $response->assertStatus(302);

        $this->assertDatabaseMissing('bookings', $this->booking->toArray());
        
        $response->assertRedirect(route('dashboard.bookings.index'));
    }

    public function test_dashboard_bookings_destroy_view_with_no_user()
    {
        $this->post(route('logout'));

        $response = $this->delete(route('dashboard.bookings.destroy', $this->booking->id));

        $response->assertStatus(302);
    }
}

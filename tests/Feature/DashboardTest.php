<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\ResourceTestCase;

class DashboardTest extends ResourceTestCase
{
    public function test_dashboard_index_view()
    {
        $response = $this->get(route('dashboard.index'));

        $response->assertStatus(200);
    }

    public function test_dashboard_index_view_with_no_user()
    {
        $this->post('/logout');

        $response = $this->get(route('dashboard.index'));

        $response->assertStatus(302);
    }
}

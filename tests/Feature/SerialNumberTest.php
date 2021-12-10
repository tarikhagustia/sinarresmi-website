<?php

namespace Tests\Feature;

use App\Models\SerialNumber;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\ResourceTestCase;

class SerialNumberTest extends ResourceTestCase
{
    use DatabaseTransactions;

    public function mockSerialNumber()
    {
        $this->serialNumber = SerialNumber::factory()->create();
    }

    public function setUp(): void
    {
        parent::setUp();

        $this->mockSerialNumber();
    }

    public function tearDown(): void
    {
        parent::tearDown();

        $this->serialNumber->delete();
    }

    /** @test */
    public function it_can_list_serial_numbers()
    {
        $this->get(route('dashboard.serial-numbers.index'))->assertStatus(200);
    }

    /** @test */
    public function it_can_show_a_serial_number()
    {
        $this->get(route('dashboard.serial-numbers.show', $this->serialNumber->id))->assertStatus(200);
    }

    /** @test */
    public function it_can_render_create_serial_number_view()
    {
        $this->get(route('dashboard.serial-numbers.create'))->assertStatus(200);
    }

    /** @test */
    public function it_can_create_a_serial_number()
    {
        $this->post(route('dashboard.serial-numbers.store'), SerialNumber::factory()
            ->make()
            ->toArray()
        )->assertStatus(302);
    }

    /** @test */
    public function it_can_render_edit_serial_number_view()
    {
        $this->get(route('dashboard.serial-numbers.edit', $this->serialNumber->id))->assertStatus(200);
    }

    /** @test */
    public function it_can_update_a_serial_number()
    {
        $this->put(route('dashboard.serial-numbers.update', $this->serialNumber->id), SerialNumber::factory()
            ->make()
            ->toArray()
        )->assertStatus(302);
    }

    /** @test */
    public function it_can_delete_a_serial_number()
    {
        $this->delete(route('dashboard.serial-numbers.destroy', $this->serialNumber->id))->assertStatus(302);
    }
}

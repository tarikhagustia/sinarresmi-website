<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\ResourceTestCase;

class ProductResourceTest extends ResourceTestCase
{
    protected function mockProduct()
    {
        $this->product = Product::factory()->create();
    }

    public function setUp(): void
    {
        parent::setUp();

        $this->mockProduct();
    }

    public function tearDown(): void
    {
        parent::tearDown();

        $this->product->delete();
    }

    /** @test */
    public function it_can_list_all_products()
    {
        $this->get(route('dashboard.products.index'))
            ->assertStatus(200);
    }

    /** @test */
    public function it_can_show_a_product()
    {
        $this->get(route('dashboard.products.show', $this->product))
            ->assertStatus(200);
    }

    /** @test */
    public function it_can_create_a_product()
    {
        $this->post(route('dashboard.products.store'), Product::factory()->raw())->assertStatus(302);

        $this->assertDatabaseHas('products', $this->product->toArray());
    }

    /** @test */
    public function it_can_update_a_product()
    {
        $this->patch(route('dashboard.products.update', $this->product->id), Product::factory()->raw())
            ->assertStatus(302);

        $this->assertDatabaseHas('products', $this->product->toArray());
    }

    /** @test */
    public function it_can_delete_a_product()
    {
        $this->delete(route('dashboard.products.destroy', $this->product->id))
            ->assertStatus(302);

        $this->assertDatabaseMissing('products', $this->product->toArray());
    }
}

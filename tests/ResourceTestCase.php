<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResourceTestCase extends TestCase
{    
    use DatabaseTransactions;

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
}

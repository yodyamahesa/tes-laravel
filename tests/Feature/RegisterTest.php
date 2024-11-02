<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_register()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function text_new_users_can_register()
    {
        // $response = $this->post('/register', [

        // ]);
    }
}

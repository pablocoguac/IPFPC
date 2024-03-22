<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OpsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    public function test_sum()
    {
        $response = $this->get('/api/sum?a=5&b=6');

        $response->assertStatus(200)
                 ->assertJson([
                     'result' => 11
                 ]);
    }

    public function test_substraction()
    {
        $response = $this->get('/api/subs?a=10&b=6');

        $response->assertStatus(200)
                 ->assertJson([
                     'result' => 4
                 ]);
    }

    public function test_mult()
    {
        $response = $this->get('/api/mult?a=8&b=6');

        $response->assertStatus(200)
                 ->assertJson([
                     'result' => 48
                 ]);
    }

    public function test_division()
    {
        $response = $this->get('/api/div?a=15&b=3');

        $response->assertStatus(200)
                 ->assertJson([
                     'result' => 5
                 ]);
    }

    public function test_pow()
    {
        $response = $this->get('/api/pow?val=2&exp=4');

        $response->assertStatus(200)
                 ->assertJson([
                     'result' => 16
                 ]);
    }

    public function test_cube()
    {
        $response = $this->get('/api/cub?val=15');

        $response->assertStatus(200)
                 ->assertJson([
                     'result' => 3375
                 ]);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\CaculatorController;
use Tests\TestCase;

class CaculatorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdd(){
        $result = app(CaculatorController::class)->add(1,2);
        $this->assertEquals(3, $result);
    }

    public function testMinus(){
        $result = app(CaculatorController::class)->minus(5,2);
        $this->assertEquals(3, $result);
    }
}

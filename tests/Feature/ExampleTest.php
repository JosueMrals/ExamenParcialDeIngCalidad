<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Empleado;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function test_empleado()
    {
        $response = $this->get('/empleados');

        $response->assertStatus(200);
    }
    
}

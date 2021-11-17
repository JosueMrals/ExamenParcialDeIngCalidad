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
        $empleados = Empleado::all();

        $view = $this->view('empleados.index', ['empleados' =>  $empleados]);

        $view->assertSee('Josue');
    }
    
}

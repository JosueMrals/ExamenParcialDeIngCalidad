<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Facade\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'id' => '6',
            'nombre' => 'Josue',
            'apellido' => 'Nahum'
        ]);
    }
}

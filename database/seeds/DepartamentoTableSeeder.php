<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create(['nombre'=>'Diseño']);
        Departamento::create(['nombre'=>'Cobranza']);
        Departamento::create(['nombre'=>'Reservaciones']);
        Departamento::create(['nombre'=>'Telemarketing']);
        Departamento::create(['nombre'=>'Sistemas']);
        Departamento::create(['nombre'=>'Convenios']);
      
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 20; $i++) { 
            DB::table('frutas')->insert(array(
                'nombre' => 'Manzana '.$i,
                'descripcion' => 'Descripcion de la fruta '.$i,
                'precio' => $i
            ));
        }
        $this->command->info('La tabla frutas se ha llenado satisfactoriamente');
    }
}

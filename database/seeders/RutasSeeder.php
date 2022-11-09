<?php

namespace Database\Seeders;

use App\Models\rutas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rutas::create([
            'rutas'=>'AZUA',
            'idusuario'=>'1'    
        ]);

        rutas::create([
            'rutas'=>'SUR PRODUNDO',
            'idusuario'=>'1'    
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\avataClientes;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          avataClientes::Create([
           'avata' => 'NO RUTA'
        ]);
    }
}

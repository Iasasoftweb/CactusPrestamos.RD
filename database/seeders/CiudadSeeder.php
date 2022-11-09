<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::Create([
            'ciudad' => 'AZUA'
        ]);

        Ciudad::Create([
            'ciudad' => 'BANI'
        ]);

        Ciudad::Create([
            'ciudad' => 'OCOA'
        ]);

        Ciudad::Create([
            'ciudad' => 'SAN JUAN'
        ]);


        Ciudad::Create([
            'ciudad' => 'BARAHONA'
        ]);

        Ciudad::Create([
            'ciudad' => 'BAHORUCO'
        ]);

        Ciudad::Create([
            'ciudad' => 'LAS MATAS'
        ]);

        Ciudad::Create([
            'ciudad' => 'EL CERCADO'
        ]);
    }
}

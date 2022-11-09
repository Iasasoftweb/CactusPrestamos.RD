<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(userseeder::class);
        $this->call(AvataSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(RutasSeeder::class);
        $this->call(NacionalidadSeeder::class);
        $this->call(ClientesSeeder::class);
    }
}

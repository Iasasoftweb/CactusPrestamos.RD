<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::Create([
           'name'=>'Ismael Santos',
           'email'=>'ismaelsantos@hotmail.com',
           'password'=>bcrypt('123456789')
      ]);
    }
}

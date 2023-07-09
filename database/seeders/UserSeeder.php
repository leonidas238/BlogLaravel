<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run ()
   {
      User::create([
        'name' => 'victor Heredia',
        'email' => 'salamin@guasca.gl',
        'password' => bcrypt('1234'),
      ]);
      User::factory(9)->create();
   }

 }
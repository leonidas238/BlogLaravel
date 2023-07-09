<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   public function run ()
   {
      User::create([
        'name' => 'Victor Heredia',
        'email' => 'salamin@guasca.gl',
        'password' => bcrypt('1234'),
      ]);
      User::factory(9)->create();
   }

 }
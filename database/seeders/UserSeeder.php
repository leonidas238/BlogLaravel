<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   public function run ()
   {
      User::create([
        'name' => 'Ozzy Osbourne',
        'email' => 'ozzy@blackSabbath.hm',
        'password' => bcrypt('666'),
      ]);
      User::factory(9)->create();
   }

 }
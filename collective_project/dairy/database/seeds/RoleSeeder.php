<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        db::table('roles')->insert([
          'name' => 'admin',
          'description' => 'Administrator',
          'created_at' => now(),
          'updated_at' => now()
        ]);
        //manage
        db::table('roles')->insert([
          'name' => 'manager',
          'description' => 'manager',
          'created_at' => now(),
          'updated_at' => now()
        ]);
        //user
        db::table('roles')->insert([
          'name' => 'user',
          'description' => 'user',
          'created_at' => now(),
          'updated_at' => now()
        ]);

    }
}

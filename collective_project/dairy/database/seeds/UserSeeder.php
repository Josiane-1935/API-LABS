<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Japur',
            'last_name' => 'Mukubwa',
            'nationalId' => 1234567890,
            'gender' => 'male',
            'empId' => 6001,
            'photo' => 'uploads/users/male.png',
            'dob' => '1986-07-11',
            'password' => Hash::make('123456'),
            'roleId' => 1,//admin
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animalType')->insert([
            'name' => 'cow',
            'photo' => 'uploads/cow.jfif',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Yazid',
                'email' => 'bustomi@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'admin'
            ],
            [
                'name' => 'mhs@gmail.com',
                'email' => '11',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ]
            ]);

        $this->call([
            QuestionSeeder::class,
            DimensionSeeder::class,
        ]);
    }
}

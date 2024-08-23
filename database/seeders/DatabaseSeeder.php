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
                'nim' => 'admin',
                'password' => Hash::make('123'),
                'role' => 'admin'
            ],
            [
                'name' => 'mhs1',
                'nim' => '11',
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

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
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Aulia',
                'email' => 'aulia@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Dimas',
                'email' => 'dimas@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Fitri',
                'email' => 'fitri@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Gilang',
                'email' => 'gilang@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Hana',
                'email' => 'hana@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Ivan',
                'email' => 'ivan@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Joko',
                'email' => 'joko@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Kurnia',
                'email' => 'kurnia@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Lutfi',
                'email' => 'lutfi@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Maya',
                'email' => 'maya@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Nina',
                'email' => 'nina@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Omar',
                'email' => 'omar@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Putri',
                'email' => 'putri@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Qori',
                'email' => 'qori@gmail.com',
                'password' => Hash::make('123'),
                'role' => 'mahasiswa'
            ],
            ]);

        $this->call([
            QuestionSeeder::class,
            DimensionSeeder::class,
            MahasiswaSeeder::class,
        ]);
    }
}

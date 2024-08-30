<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            ['user_id' => 2, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 3, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 4, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 5, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 6, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 7, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 8, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 9, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 10, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 11, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 12, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 13, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 14, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 15, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 16, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 17, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 18, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 19, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 20, 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
        ]);
    }
}

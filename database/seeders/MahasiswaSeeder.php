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
            ['user_id' => 2, 'gender' => 'laki-laki', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 3, 'gender' => 'perempuan', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 4, 'gender' => 'laki-laki', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 5, 'gender' => 'perempuan', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 6, 'gender' => 'laki-laki', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 7, 'gender' => 'perempuan', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 8, 'gender' => 'laki-laki', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 9, 'gender' => 'perempuan', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 10, 'gender' => 'laki-laki', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 11, 'gender' => 'perempuan', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 12, 'gender' => 'laki-laki', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 13, 'gender' => 'perempuan', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
            ['user_id' => 14, 'gender' => 'laki-laki', 'semester' => 4, 'jurusan' => 'Teknik Informatika'],
        ]);
    }
}

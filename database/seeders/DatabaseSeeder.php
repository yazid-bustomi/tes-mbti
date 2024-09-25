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
        $mahasiswa = [
            ['name' => 'Admin', 'username' => 'admin', 'password' => hash::make('admin1234'), 'role' => 'admin'],
            ['name' => 'M.ADAM SOFYAN', 'username' => '24121001', 'password' => Hash::make('24121001'), 'role' => 'mahasiswa'],
            ['name' => 'CITRA ZAHWA PRAMESTI', 'username' => '24121002', 'password' => Hash::make('24121002'), 'role' => 'mahasiswa'],
            // ['name' => 'MUKHAMMAD TAUFIQURROCHMAN', 'username' => '24121003', 'password' => Hash::make('24121003'), 'role' => 'mahasiswa'],
            // ['name' => 'PAULUS RIZKY ADI NUGROHO', 'username' => '24121004', 'password' => Hash::make('24121004'), 'role' => 'mahasiswa'],
            // ['name' => 'AGHISNAFI ROHMATILLAH', 'username' => '24121005', 'password' => Hash::make('24121005'), 'role' => 'mahasiswa'],
            // ['name' => 'MUHAMMAD ZIDAN PRATAMA', 'username' => '24121006', 'password' => Hash::make('24121006'), 'role' => 'mahasiswa'],
            // ['name' => 'DAVA ZULIANSYAH PUTRA', 'username' => '24121007', 'password' => Hash::make('24121007'), 'role' => 'mahasiswa'],
            // ['name' => 'MUHAMMAD FARDAN AL-A`DHOM', 'username' => '24121008', 'password' => Hash::make('24121008'), 'role' => 'mahasiswa'],
            // ['name' => 'IBAD AR RAHMAN', 'username' => '24121009', 'password' => Hash::make('24121009'), 'role' => 'mahasiswa'],
            // ['name' => 'AKHMAD FERDIANSYAH AL GHIFARI', 'username' => '24121010', 'password' => Hash::make('24121010'), 'role' => 'mahasiswa'],
            // ['name' => 'M.HILMAN', 'username' => '24121011', 'password' => Hash::make('24121011'), 'role' => 'mahasiswa'],
            // ['name' => 'ERICK GEOVANI', 'username' => '24121012', 'password' => Hash::make('24121012'), 'role' => 'mahasiswa'],
            // ['name' => 'AZHAR TSANIA', 'username' => '24121013', 'password' => Hash::make('24121013'), 'role' => 'mahasiswa'],
            // ['name' => 'MOKHAMAD BAYU ADISAPUTRA', 'username' => '24121014', 'password' => Hash::make('24121014'), 'role' => 'mahasiswa'],
            // ['name' => 'NUR MUHAMMAD ASSHIDIQ', 'username' => '24121015', 'password' => Hash::make('24121015'), 'role' => 'mahasiswa'],
            // ['name' => 'ALVIAN RAFLI SAPUTRA', 'username' => '24121016', 'password' => Hash::make('24121016'), 'role' => 'mahasiswa'],
            // ['name' => 'FAQITA AKHMAD KURNIADI', 'username' => '24121017', 'password' => Hash::make('24121017'), 'role' => 'mahasiswa'],
            // ['name' => 'FAUHAD BUTOLO', 'username' => '24121018', 'password' => Hash::make('24121018'), 'role' => 'mahasiswa'],
            // ['name' => 'ABDUL QODIR ARIF ROHMATULLOH', 'username' => '24121019', 'password' => Hash::make('24121019'), 'role' => 'mahasiswa'],
            // ['name' => 'EKA MAULIDDYAH INDRA SAPUTRI', 'username' => '24121020', 'password' => Hash::make('24121020'), 'role' => 'mahasiswa'],
            // ['name' => 'ISNAENI HIDAYATI', 'username' => '24121021', 'password' => Hash::make('24121021'), 'role' => 'mahasiswa'],
            // ['name' => 'AYESHA CLIOPARI NAJID', 'username' => '24121022', 'password' => Hash::make('24121022'), 'role' => 'mahasiswa'],
            // ['name' => 'MUHAMMAD RIZKY DWI SAPUTRA', 'username' => '24121023', 'password' => Hash::make('24121023'), 'role' => 'mahasiswa'],
            // ['name' => 'MUKHAMMAD DWI WAHYUDIN', 'username' => '24121024', 'password' => Hash::make('24121024'), 'role' => 'mahasiswa'],
            // ['name' => 'MUHAMMAD ABDILLAH FIRDAUS', 'username' => '24121025', 'password' => Hash::make('24121025'), 'role' => 'mahasiswa'],
            // ['name' => 'MUHAMMAD MURTADLO', 'username' => '24121026', 'password' => Hash::make('24121026'), 'role' => 'mahasiswa'],
            // ['name' => 'MUHAMMAD RAFIHUL AKHIROH', 'username' => '24121027', 'password' => Hash::make('24121027'), 'role' => 'mahasiswa'],
            // ['name' => 'William Effendi', 'username' => '24121028', 'password' => Hash::make('24121028'), 'role' => 'mahasiswa'],
            // ['name' => 'MOHAMMAD ARTHUR ROZI', 'username' => '24121029', 'password' => Hash::make('24121029'), 'role' => 'mahasiswa'],
            // ['name' => 'TITO SUMARTONO', 'username' => '24121030', 'password' => Hash::make('24121030'), 'role' => 'mahasiswa'],
            // ['name' => 'MUHAMMAD FIRMAN MAULIDDIN', 'username' => '24121031', 'password' => Hash::make('24121031'), 'role' => 'mahasiswa'],
            // ['name' => 'DWI LUKMAN SAPUTRO', 'username' => '24121032', 'password' => Hash::make('24121032'), 'role' => 'mahasiswa'],
            // ['name' => 'DEA MARDIANA SAFIRA', 'username' => '24121033', 'password' => Hash::make('24121033'), 'role' => 'mahasiswa'],
            // ['name' => 'EKA DHURROTUL FAKHIRAH', 'username' => '24121034', 'password' => Hash::make('24121034'), 'role' => 'mahasiswa'],
            // ['name' => 'DWI ARISANDI', 'username' => '24222001', 'password' => Hash::make('24222001'), 'role' => 'mahasiswa'],
            // ['name' => 'RENDY HARI SASONO', 'username' => '24222002', 'password' => Hash::make('24222002'), 'role' => 'mahasiswa'],
            // ['name' => 'YUSI SUSANTI', 'username' => '24222003', 'password' => Hash::make('24222003'), 'role' => 'mahasiswa'],
            // ['name' => 'SALSABILA', 'username' => '24111001', 'password' => Hash::make('24111001'), 'role' => 'mahasiswa'],
            // ['name' => 'TOFAN EFENDI', 'username' => '24111003', 'password' => Hash::make('24111003'), 'role' => 'mahasiswa'],
            // ['name' => 'MUHAMMAD AMIRRUDIN', 'username' => '24111004', 'password' => Hash::make('24111004'), 'role' => 'mahasiswa'],
            // ['name' => 'HIDAYATUL LILLAH SAID', 'username' => '24111005', 'password' => Hash::make('24111005'), 'role' => 'mahasiswa'],
            // ['name' => 'KHIKMATUL FINA MAFAZA', 'username' => '24111006', 'password' => Hash::make('24111006'), 'role' => 'mahasiswa'],
            // ['name' => 'REZA PUTRA HAKIM', 'username' => '24111007', 'password' => Hash::make('24111007'), 'role' => 'mahasiswa'],
            // ['name' => 'ARFIFFARHABIL ADZKIA AJI', 'username' => '24111008', 'password' => Hash::make('24111008'), 'role' => 'mahasiswa'],
            // ['name' => 'ZASKIA AZ-ZARA DEWI', 'username' => '24111009', 'password' => Hash::make('24111009'), 'role' => 'mahasiswa'],
            // ['name' => 'ZANUBA ARIFA CHAFSOH', 'username' => '24111010', 'password' => Hash::make('24111010'), 'role' => 'mahasiswa'],
            // ['name' => 'ACHMAD IVAN EFENDY', 'username' => '24111011', 'password' => Hash::make('24111011'), 'role' => 'mahasiswa'],
            // ['name' => 'JUNAIDI ABDILLAH', 'username' => '24111012', 'password' => Hash::make('24111012'), 'role' => 'mahasiswa'],
        ];

        DB::table('users')->insert($mahasiswa);

        $this->call([
            QuestionSeeder::class,
            DimensionSeeder::class,
            MahasiswaSeeder::class,
        ]);
    }
}

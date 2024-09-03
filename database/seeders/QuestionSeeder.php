<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dimensi E/I
        DB::table('questions')->insert([
            ['question' => 'Saya lebih memilih berkomunikasi dengan berbicara.', 'dimension' => 'E/I'],
            ['question' => 'Saya menemukan dan mengembangkan ide dengan mendiskusikannya.', 'dimension' => 'E/I'],
            ['question' => 'Saya berorientasi pada dunia eksternal (kegiatan, orang).', 'dimension' => 'E/I'],
            ['question' => 'Saya fokus pada banyak hobi secara luas dan umum.', 'dimension' => 'E/I'],
            ['question' => 'Saya bersifat sosial dan ekspresif.', 'dimension' => 'E/I'],
            ['question' => 'Bertemu orang dan aktivitas sosial membuat saya bersemangat.', 'dimension' => 'E/I'],
            ['question' => 'Beraktivitas sendirian di rumah membuat saya merasa bosan.', 'dimension' => 'E/I'],
            ['question' => 'Saya memiliki inisiatif tinggi hampir dalam segala hal, meskipun tidak berhubungan langsung dengan saya.', 'dimension' => 'E/I'],
            ['question' => 'Saya lebih memilih tempat yang ramai dan banyak interaksi atau aktivitas.', 'dimension' => 'E/I'],
            ['question' => 'Saya berani bertindak tanpa berpikir terlalu lama.', 'dimension' => 'E/I'],
            ['question' => 'Saya suka mengekspresikan semangat saya.', 'dimension' => 'E/I'],
            ['question' => 'Saya lebih suka berkomunikasi dengan sekelompok orang.', 'dimension' => 'E/I'],
            ['question' => 'Saya lebih suka komunikasi langsung (tatap muka).', 'dimension' => 'E/I'],
            ['question' => 'Saya membangun ide saat berbicara.', 'dimension' => 'E/I'],
            ['question' => 'Saya spontan, mudah bergaul, dan fleksibel.', 'dimension' => 'E/I'],
        ]);

        // Dimensi N/S
        DB::table('questions')->insert([
            ['question' => 'Saya lebih suka bergerak dari gambaran umum ke detail saat mengerjakan sesuatu.', 'dimension' => 'N/S'],
            ['question' => 'Saya sering berbicara mengenai visi masa depan dan konsep-konsep yang berkaitan dengan visi tersebut.', 'dimension' => 'N/S'],
            ['question' => 'Saya menggunakan imajinasi dan perenungan sebagai pedoman utama dalam pengambilan keputusan.', 'dimension' => 'N/S'],
            ['question' => 'Saya merasa lebih nyaman dengan cara yang bebas dan dinamis dalam menyelesaikan tugas.', 'dimension' => 'N/S'],
            ['question' => 'Saya lebih memilih ide-ide inspiratif daripada fakta-fakta konkret.', 'dimension' => 'N/S'],
            ['question' => 'Saya lebih suka melakukan perubahan dan variasi daripada mengikuti rutinitas yang tetap.', 'dimension' => 'N/S'],
            ['question' => 'Saya sering bertindak dengan semangat tanpa terlalu memperhatikan batas waktu.', 'dimension' => 'N/S'],
            ['question' => 'Saya cenderung menarik kesimpulan dengan cepat berdasarkan naluri saya.', 'dimension' => 'N/S'],
            ['question' => 'Saya lebih memahami ide dan teori saat mempraktikkannya langsung daripada hanya membaca atau mendengarnya.', 'dimension' => 'N/S'],
            ['question' => 'Saya berfokus pada apa yang bisa dicapai di masa depan daripada pada saat ini.', 'dimension' => 'N/S'],
            ['question' => 'Saya hanya mengamati dan mengingat detail yang relevan dengan pola yang lebih besar.', 'dimension' => 'N/S'],
            ['question' => 'Saya suka menghadapi tantangan untuk menguasai keterampilan baru.', 'dimension' => 'N/S'],
            ['question' => 'Saya lebih memilih cara-cara unik dan inovatif daripada yang sudah umum dipraktekkan orang lain.', 'dimension' => 'N/S'],
            ['question' => 'Saya lebih suka memikirkan konsep-konsep besar sebelum memperhatikan rincian kecil.', 'dimension' => 'N/S'],
            ['question' => 'Saya merasa lebih terinspirasi oleh visi masa depan daripada oleh fakta-fakta yang ada saat ini.', 'dimension' => 'N/S'],
        ]);

        // Dimensi T/F
        DB::table('questions')->insert([
            ['question' => 'Saya lebih cenderung untuk bersikap objektif dalam situasi apapun.', 'dimension' => 'T/F'],
            ['question' => 'Saya merasa yakin dengan penjelasan yang logis dan masuk akal.', 'dimension' => 'T/F'],
            ['question' => 'Saya berorientasi pada tugas dan job description dalam pekerjaan saya.', 'dimension' => 'T/F'],
            ['question' => 'Saya membuat keputusan berdasarkan logika dan aturan yang berlaku.', 'dimension' => 'T/F'],
            ['question' => 'Saya lebih suka menetapkan tujuan dan sasaran sebelum memulai sesuatu.', 'dimension' => 'T/F'],
            ['question' => 'Saya lebih suka menganalisis informasi secara mendalam sebelum mengambil keputusan.', 'dimension' => 'T/F'],
            ['question' => 'Saya menghargai seseorang berdasarkan keterampilan dan faktor teknis mereka.', 'dimension' => 'T/F'],
            ['question' => 'Saya merasa bahwa melibatkan perasaan dalam keputusan tidak profesional.', 'dimension' => 'T/F'],
            ['question' => 'Saya percaya bahwa yang penting adalah tercapainya tujuan.', 'dimension' => 'T/F'],
            ['question' => 'Saya sering mempertanyakan hal-hal untuk memastikan semuanya benar.', 'dimension' => 'T/F'],
            ['question' => 'Saya merasa standar harus ditegakkan di atas segalanya sebagai bentuk kehormatan dan harga diri.', 'dimension' => 'T/F'],
            ['question' => 'Saya menuntut perlakuan yang adil dan sama untuk semua orang.', 'dimension' => 'T/F'],
            ['question' => 'Saya lebih mementingkan hubungan sebab-akibat dalam analisis dan keputusan.', 'dimension' => 'T/F'],
            ['question' => 'Saya lebih memilih pendekatan yang terstruktur dan sistematis daripada yang fleksibel.', 'dimension' => 'T/F'],
            ['question' => 'Saya merasa penting untuk mengikuti prosedur yang sudah ada daripada mencari cara baru.', 'dimension' => 'T/F'],
        ]);

        // Dimensi J/P
        DB::table('questions')->insert([
            ['question' => 'Saya lebih suka memiliki rencana yang terstruktur dan deadline yang jelas.', 'dimension' => 'J/P'],
            ['question' => 'Saya tidak menyukai situasi yang mendadak dan di luar perencanaan.', 'dimension' => 'J/P'],
            ['question' => 'Saya merasa aturan, jadwal, dan target sangat membantu dan memperjelas tindakan.', 'dimension' => 'J/P'],
            ['question' => 'Saya merasa nyaman dan lebih efisien jika mengikuti aturan, jadwal, dan target.', 'dimension' => 'J/P'],
            ['question' => 'Saya cenderung mengatur orang lain dengan tata tertib agar tujuan tercapai.', 'dimension' => 'J/P'],
            ['question' => 'Saya lebih fokus pada target dan cenderung mengabaikan hal-hal baru yang muncul.', 'dimension' => 'J/P'],
            ['question' => 'Saya berpegang teguh pada pendirian dan keputusan saya.', 'dimension' => 'J/P'],
            ['question' => 'Saya merasa tenang jika semua keputusan sudah diambil dan diputuskan.', 'dimension' => 'J/P'],
            ['question' => 'Ketidakpastian membuat saya bingung dan merasa tidak nyaman.', 'dimension' => 'J/P'],
            ['question' => 'Saya merasa situasi last minute sangat menyiksa, membuat stres, dan merupakan kesalahan.', 'dimension' => 'J/P'],
            ['question' => 'Saya melihat perubahan sebagai sesuatu yang harus dihindari.', 'dimension' => 'J/P'],
            ['question' => 'Saya lebih suka bertindak sesuai dengan apa yang sudah direncanakan.', 'dimension' => 'J/P'],
            ['question' => 'Saya percaya bahwa hidup harus diatur dengan baik sejak awal.', 'dimension' => 'J/P'],
            ['question' => 'Saya merasa daftar dan checklist adalah panduan penting dalam menjalani aktivitas.', 'dimension' => 'J/P'],
            ['question' => 'Saya merasa puas ketika semuanya berjalan sesuai dengan rencana yang telah dibuat.', 'dimension' => 'J/P'],
        ]);
    }
}

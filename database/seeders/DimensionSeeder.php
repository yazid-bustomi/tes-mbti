<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dimensions')->insert([
            [
                'dimension' => 'INTJ (Architect) Introversion (I) Intuition (N) Thinking (T) Judging (J)',
                'description' => 'INTJ adalah tipe kepribadian yang visioner dan strategis. Mereka sangat mandiri, logis, dan suka merencanakan masa depan dengan pendekatan yang analitis.',
                'career_recommendation' => 'Ilmuwan/Data Scientist, Insinyur, Pengacara, Pengembang Software, Konsultan Strategi, Manajer Proyek',
                'reason_career' => 'INTJ unggul dalam pekerjaan yang membutuhkan perencanaan strategis, analisis mendalam, dan pemecahan masalah kompleks. Mereka cocok di lingkungan yang membutuhkan inovasi dan visi jangka panjang.'
            ],
            [
                'dimension' => 'INTP (Logician) Introversion (I) Intuition (N) Thinking (T) Perceiving (P)',
                'description' => 'INTP dikenal sebagai pemikir analitis dan inovatif. Mereka suka mengeksplorasi konsep-konsep baru dan sangat tertarik pada teori-teori yang kompleks.',
                'career_recommendation' => 'Ahli Matematika/Ilmuwan, Insinyur Software, Profesor/Academician, Analis Sistem, Pengembang Game, Peneliti',
                'reason_career' => 'INTP cenderung tertarik pada teori dan logika. Mereka cocok di bidang yang memungkinkan eksplorasi ide-ide baru dan pemecahan masalah kompleks, sering dalam lingkungan yang kurang terstruktur.'
            ],
            [
                'dimension' => 'ENTJ (Commander) Extraversion (E) Intuition (N) Thinking (T) Judging (J)',
                'description' => 'ENTJ adalah pemimpin alami yang tegas dan efisien. Mereka sangat berorientasi pada tujuan, suka mengorganisir, dan memimpin tim untuk mencapai hasil yang diinginkan.',
                'career_recommendation' => 'CEO/Manajer Eksekutif, Pengacara, Konsultan Manajemen, Pemimpin Militer, Insinyur Industri, Politisi',
                'reason_career' => 'ENTJ adalah pemimpin alami yang cenderung menonjol di posisi yang membutuhkan pengambilan keputusan cepat, pengelolaan tim, dan pencapaian target yang ambisius.'
            ],
            [
                'dimension' => 'ENTP (Debater) Extraversion (E) Intuition (N) Thinking (T) Perceiving (P)',
                'description' => 'ENTP adalah tipe kepribadian yang cerdas dan kreatif. Mereka suka berdebat dan menantang ide-ide yang ada, serta senang mencari solusi inovatif untuk masalah.',
                'career_recommendation' => 'Pengacara, Konsultan Bisnis, Wirausaha, Marketer, Penulis/Jurnalis, Pengembang Produk',
                'reason_career' => 'ENTP menikmati tantangan dan suka berdebat. Mereka cenderung berhasil dalam karier yang membutuhkan kreativitas, inovasi, dan kemampuan untuk berpikir cepat.'
            ],
            [
                'dimension' => 'INFJ (Advocate) Introversion (I) Intuition (N) Feeling (F) Judging (J)',
                'description' => 'INFJ adalah tipe kepribadian yang idealis dan empatik. Mereka memiliki visi yang kuat tentang bagaimana dunia seharusnya dan sering bekerja untuk memperbaiki keadaan orang lain.',
                'career_recommendation' => 'Konselor/Therapist, Pekerja Sosial, Penulis, Ahli Human Resources (HR), Profesor, Aktivis',
                'reason_career' => 'INFJ peduli pada orang lain dan sering tertarik pada pekerjaan yang memungkinkan mereka membantu orang lain atau mengejar tujuan yang lebih besar.'
            ],
            [
                'dimension' => 'INFP (Mediator) Introversion (I) Intuition (N) Feeling (F) Perceiving (P)',
                'description' => 'INFP adalah tipe kepribadian yang kreatif dan penuh perasaan. Mereka sangat peduli pada nilai-nilai pribadi dan sering kali mencari tujuan hidup yang mendalam dan bermakna.',
                'career_recommendation' => 'Penulis/Penyair, Artis, Konselor, Pekerja Sosial, Ahli Bahasa/Penerjemah, Pendidik',
                'reason_career' => 'INFP menghargai kreativitas dan hubungan manusiawi. Mereka cenderung berkembang dalam peran yang memungkinkan ekspresi diri dan kontribusi pada tujuan kemanusiaan.'
            ],
            [
                'dimension' => 'ENFJ (Protagonist) Extraversion (E) Intuition (N) Feeling (F) Judging (J)',
                'description' => 'ENFJ adalah tipe kepribadian yang karismatik dan inspiratif. Mereka adalah pemimpin alami yang suka membantu orang lain mencapai potensi mereka dan sering memotivasi serta mempengaruhi orang-orang di sekitar mereka.',
                'career_recommendation' => 'Konselor, Pendidik/Guru, Direktur HR, Diplomat, Manajer Proyek, Aktivis/Advokat',
                'reason_career' => 'ENFJ sangat karismatik dan peduli pada kesejahteraan orang lain. Mereka sukses dalam peran yang memungkinkan mereka memimpin, memotivasi, dan mendukung perkembangan orang lain.'
            ],
            [
                'dimension' => 'ENFP (Campaigner) Extraversion (E) Intuition (N) Feeling (F) Perceiving (P)',
                'description' => 'ENFP adalah tipe kepribadian yang antusias dan kreatif. Mereka sangat terbuka pada kemungkinan baru dan suka menginspirasi serta membawa energi positif ke dalam kehidupan orang lain.',
                'career_recommendation' => 'Marketer, Konsultan Kreatif, Jurnalis, Pendidik, Penulis, Pekerja Sosial',
                'reason_career' => 'ENFP adalah orang yang sangat bersemangat dan kreatif, cocok untuk pekerjaan yang memungkinkan mereka mengekspresikan diri dan bekerja dengan orang lain untuk menciptakan perubahan positif.'
            ],
            [
                'dimension' => 'ISTJ (Logistician) Introversion (I) Sensing (S) Thinking (T) Judging (J)',
                'description' => 'ISTJ adalah tipe kepribadian yang bertanggung jawab dan praktis. Mereka sangat teliti, terorganisir, dan dapat diandalkan dalam memenuhi tugas dan kewajiban.',
                'career_recommendation' => 'Akuntan, Auditor, Administrator, Insinyur Sipil, Pengacara, Manajer Operasional',
                'reason_career' => 'ISTJ unggul dalam peran yang membutuhkan ketelitian, keandalan, dan kepatuhan pada prosedur yang ditetapkan. Mereka cocok di lingkungan yang terstruktur dan stabil.'
            ],
            [
                'dimension' => 'ISFJ (Defender) Introversion (I) Sensing (S) Feeling (F) Judging (J)',
                'description' => 'ISFJ adalah tipe kepribadian yang peduli dan suportif. Mereka sangat loyal dan bekerja keras untuk melindungi serta mendukung orang-orang yang mereka cintai.',
                'career_recommendation' => 'Perawat, Guru, Administrator, Ahli HR, Konselor, Librarian',
                'reason_career' => 'ISFJ peduli dan protektif. Mereka berkembang dalam pekerjaan yang memungkinkan mereka mendukung dan melayani orang lain, serta bekerja di lingkungan yang stabil dan mendukung.'
            ],
            [
                'dimension' => 'ESTJ (Executive) Extraversion (E) Sensing (S) Thinking (T) Judging (J)',
                'description' => 'ESTJ adalah tipe kepribadian yang kuat dan tegas. Mereka suka mengorganisir lingkungan sekitar mereka dan biasanya menjadi pemimpin dalam komunitas atau tempat kerja.',
                'career_recommendation' => 'Manajer Operasional, Administrator Publik, Pengacara, Inspektur, Manajer Proyek, Militer',
                'reason_career' => 'ESTJ adalah tipe kepribadian yang sangat terorganisir dan efisien. Mereka berhasil dalam peran yang membutuhkan pengelolaan proses, kepatuhan terhadap aturan, dan pencapaian hasil.'
            ],
            [
                'dimension' => 'ESFJ (Consul) Extraversion (E) Sensing (S) Feeling (F) Judging (J)',
                'description' => 'ESFJ adalah tipe kepribadian yang ramah dan perhatian. Mereka suka membantu orang lain dan sering kali menjadi pusat dari kegiatan sosial, memastikan bahwa semua orang merasa nyaman dan diperhatikan.',
                'career_recommendation' => 'Guru, Perawat, Ahli HR, Event Planner, Konselor, Administrator Kesehatan',
                'reason_career' => 'ESFJ sangat peduli dan suportif. Mereka cocok untuk pekerjaan yang memungkinkan mereka bekerja langsung dengan orang lain untuk mendukung dan meningkatkan kesejahteraan mereka.'
            ],
            [
                'dimension' => 'ISTP (Virtuoso) Introversion (I) Sensing (S) Thinking (T) Perceiving (P)',
                'description' => 'ISTP adalah tipe kepribadian yang praktis dan fleksibel. Mereka suka memecahkan masalah secara langsung dan sering memiliki keterampilan teknis yang luar biasa.',
                'career_recommendation' => 'Insinyur Mekanik, Teknisi, Pekerja Konstruksi, Pengembang Software, Pilot, Ahli IT',
                'reason_career' => 'ISTP unggul dalam pekerjaan yang membutuhkan keterampilan teknis dan pemecahan masalah praktis. Mereka suka bekerja dengan tangan mereka dan merasa puas saat menyelesaikan tugas yang konkret.'
            ],
            [
                'dimension' => 'ISFP (Adventurer) Introversion (I) Sensing (S) Feeling (F) Perceiving (P)',
                'description' => 'ISFP adalah tipe kepribadian yang artistik dan penuh perasaan. Mereka suka mengeksplorasi dunia sekitar mereka dengan tangan mereka sendiri, sering kali melalui seni, musik, atau alam.',
                'career_recommendation' => 'Artis, Desainer Interior, Musisi, Fotografer, Ahli Terapi Seni, Chef',
                'reason_career' => 'ISFP adalah orang yang sangat kreatif dan empatik, cocok untuk karier yang memungkinkan mereka mengekspresikan diri melalui seni atau membantu orang lain dengan cara yang praktis dan suportif.'
            ],
            [
                'dimension' => 'ESTP (Entrepreneur) Extraversion (E) Sensing (S) Thinking (T) Perceiving (P)',
                'description' => 'ESTP adalah tipe kepribadian yang energik dan pragmatis. Mereka suka bertindak cepat dan menikmati tantangan yang membutuhkan pemikiran cepat dan adaptasi.',
                'career_recommendation' => 'Wirausaha, Polisi, Ahli Pemasaran, Agen Penjualan, Pilot, Pengacara',
                'reason_career' => 'ESTP adalah tipe yang berani dan cepat mengambil tindakan. Mereka berkembang dalam pekerjaan yang membutuhkan adaptasi cepat, tindakan cepat, dan sedikit risiko.'
            ],
            [
                'dimension' => 'ESFP (Entertainer) Extraversion (E) Sensing (S) Feeling (F) Perceiving (P)',
                'description' => 'ESFP adalah tipe kepribadian yang ceria dan sosial. Mereka suka membawa kebahagiaan dan energi positif ke dalam kehidupan orang lain, sering menjadi pusat perhatian dalam acara sosial.',
                'career_recommendation' => 'Artis, Aktor, Guru, Event Planner, Konselor, Pekerja Sosial',
                'reason_career' => 'ESFP suka berinteraksi dengan orang lain dan menikmati membawa kegembiraan ke lingkungan mereka. Mereka berhasil dalam karier yang memungkinkan mereka mengekspresikan diri secara bebas dan berkontribusi pada kesejahteraan orang lain.'
            ]
        ]);
    }
}

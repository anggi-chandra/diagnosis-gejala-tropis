<?php

namespace App\Services;

class QuestionService
{
    public static function getDiseases()
    {
        return [
            'D' => [
                'name' => 'Demam Berdarah (DBD)',
                'description' => 'Penyakit virus yang ditularkan oleh nyamuk, ditandai dengan demam tinggi mendadak, nyeri di belakang mata, dan potensi perdarahan.',
            ],
            'M' => [
                'name' => 'Malaria',
                'description' => 'Penyakit yang disebabkan oleh parasit plasmodium, ditandai dengan demam berkala, menggigil hebat, dan berkeringat.',
            ],
            'T' => [
                'name' => 'Tifus (Demam Tifoid)',
                'description' => 'Infeksi bakteri Salmonella typhi, biasanya melalui makanan/minuman, ditandai dengan demam yang naik bertahap dan gangguan pencernaan.',
            ],
            'C' => [
                'name' => 'Chikungunya',
                'description' => 'Penyakit virus yang menyebabkan demam dan nyeri sendi yang parah (seringkali membelenggu), mirip DBD tetapi nyeri sendi lebih dominan.',
            ],
            'L' => [
                'name' => 'Leptospirosis',
                'description' => 'Penyakit bakteri yang menyebar melalui urin hewan (terutama tikus) di air/tanah, sering terjadi setelah banjir.',
            ],
        ];
    }

    public static function getQuestions()
    {
        return [
            [
                'id' => 1,
                'text' => 'Bagaimana pola demam yang kamu alami?',
                'options' => [
                    ['id' => '1a', 'text' => 'Demam tinggi mendadak tanpa peringatan', 'value' => 'D'],
                    ['id' => '1b', 'text' => 'Demam disertai menggigil berulang', 'value' => 'M'],
                    ['id' => '1c', 'text' => 'Demam naik perlahan dari hari ke hari', 'value' => 'T'],
                    ['id' => '1d', 'text' => 'Demam sedang bersamaan nyeri sendi', 'value' => 'C'],
                    ['id' => '1e', 'text' => 'Demam disertai rasa lemah ekstrem', 'value' => 'L'],
                ],
            ],
            [
                'id' => 2,
                'text' => 'Kapan biasanya demam terasa paling berat?',
                'options' => [
                    ['id' => '2a', 'text' => 'Sepanjang hari terasa panas', 'value' => 'D'],
                    ['id' => '2b', 'text' => 'Sore hingga malam hari', 'value' => 'M'],
                    ['id' => '2c', 'text' => 'Semakin berat setiap hari', 'value' => 'T'],
                    ['id' => '2d', 'text' => 'Saat tubuh mulai bergerak', 'value' => 'C'],
                    ['id' => '2e', 'text' => 'Setelah aktivitas fisik ringan', 'value' => 'L'],
                ],
            ],
            [
                'id' => 3,
                'text' => 'Bagaimana kondisi kepala kamu?',
                'options' => [
                    ['id' => '3a', 'text' => 'Nyeri tajam di belakang mata', 'value' => 'D'],
                    ['id' => '3b', 'text' => 'Pusing berat saat menggigil', 'value' => 'M'],
                    ['id' => '3c', 'text' => 'Kepala terasa berat terus-menerus', 'value' => 'T'],
                    ['id' => '3d', 'text' => 'Sakit kepala ringan karena nyeri sendi', 'value' => 'C'],
                    ['id' => '3e', 'text' => 'Kepala terasa melayang dan lemas', 'value' => 'L'],
                ],
            ],
            [
                'id' => 4,
                'text' => 'Apa yang paling kamu rasakan di tubuh?',
                'options' => [
                    ['id' => '4a', 'text' => 'Pegal dan nyeri otot menyeluruh', 'value' => 'D'],
                    ['id' => '4b', 'text' => 'Badan terasa dingin lalu panas', 'value' => 'M'],
                    ['id' => '4c', 'text' => 'Tubuh lemah tanpa nyeri berat', 'value' => 'T'],
                    ['id' => '4d', 'text' => 'Nyeri sendi hingga sulit digerakkan', 'value' => 'C'],
                    ['id' => '4e', 'text' => 'Nyeri otot disertai kram', 'value' => 'L'],
                ],
            ],
            [
                'id' => 5,
                'text' => 'Bagaimana kondisi perut kamu?',
                'options' => [
                    ['id' => '5a', 'text' => 'Sering mual dan ingin muntah', 'value' => 'D'],
                    ['id' => '5b', 'text' => 'Perut tidak nyaman saat demam', 'value' => 'M'],
                    ['id' => '5c', 'text' => 'Perut kembung dan terasa penuh', 'value' => 'T'],
                    ['id' => '5d', 'text' => 'Tidak ada keluhan di perut', 'value' => 'C'],
                    ['id' => '5e', 'text' => 'Sakit perut disertai diare', 'value' => 'L'],
                ],
            ],
            [
                'id' => 6,
                'text' => 'Bagaimana kebiasaan buang air besar?',
                'options' => [
                    ['id' => '6a', 'text' => 'Normal tapi terasa lemas', 'value' => 'D'],
                    ['id' => '6b', 'text' => 'Normal meski badan menggigil', 'value' => 'M'],
                    ['id' => '6c', 'text' => 'Diare atau justru sulit BAB', 'value' => 'T'],
                    ['id' => '6d', 'text' => 'Tidak berubah dari biasanya', 'value' => 'C'],
                    ['id' => '6e', 'text' => 'Diare berair dan berbau', 'value' => 'L'],
                ],
            ],
            [
                'id' => 7,
                'text' => 'Apakah ada perubahan pada kulit?',
                'options' => [
                    ['id' => '7a', 'text' => 'Muncul bintik merah kecil', 'value' => 'D'],
                    ['id' => '7b', 'text' => 'Kulit terasa dingin saat demam', 'value' => 'M'],
                    ['id' => '7c', 'text' => 'Kulit tampak pucat', 'value' => 'T'],
                    ['id' => '7d', 'text' => 'Kulit terasa nyeri saat ditekan', 'value' => 'C'],
                    ['id' => '7e', 'text' => 'Kulit terasa gatal dan kering', 'value' => 'L'],
                ],
            ],
            [
                'id' => 8,
                'text' => 'Bagaimana tingkat kelelahan kamu?',
                'options' => [
                    ['id' => '8a', 'text' => 'Sangat lelah meski tidak beraktivitas', 'value' => 'D'],
                    ['id' => '8b', 'text' => 'Lelah muncul setelah demam reda', 'value' => 'M'],
                    ['id' => '8c', 'text' => 'Lelah ringan namun berkepanjangan', 'value' => 'T'],
                    ['id' => '8d', 'text' => 'Lelah akibat nyeri sendi', 'value' => 'C'],
                    ['id' => '8e', 'text' => 'Lelah ekstrem hingga sulit berdiri', 'value' => 'L'],
                ],
            ],
            [
                'id' => 9,
                'text' => 'Apakah kamu pernah menggigil hebat?',
                'options' => [
                    ['id' => '9a', 'text' => 'Tidak pernah sama sekali', 'value' => 'D'],
                    ['id' => '9b', 'text' => 'Menggigil kuat dan berulang', 'value' => 'M'],
                    ['id' => '9c', 'text' => 'Menggigil ringan sesekali', 'value' => 'T'],
                    ['id' => '9d', 'text' => 'Tidak menggigil tapi nyeri', 'value' => 'C'],
                    ['id' => '9e', 'text' => 'Menggigil disertai keringat', 'value' => 'L'],
                ],
            ],
            [
                'id' => 10,
                'text' => 'Bagaimana nafsu makan kamu?',
                'options' => [
                    ['id' => '10a', 'text' => 'Hampir tidak mau makan', 'value' => 'D'],
                    ['id' => '10b', 'text' => 'Makan sedikit saat demam', 'value' => 'M'],
                    ['id' => '10c', 'text' => 'Tidak selera makan berhari-hari', 'value' => 'T'],
                    ['id' => '10d', 'text' => 'Nafsu makan masih cukup', 'value' => 'C'],
                    ['id' => '10e', 'text' => 'Tidak bisa makan sama sekali', 'value' => 'L'],
                ],
            ],
            [
                'id' => 11,
                'text' => 'Apakah terjadi perdarahan ringan?',
                'options' => [
                    ['id' => '11a', 'text' => 'Mimisan atau gusi berdarah', 'value' => 'D'],
                    ['id' => '11b', 'text' => 'Tidak ada perdarahan', 'value' => 'M'],
                    ['id' => '11c', 'text' => 'Bibir terlihat kering', 'value' => 'T'],
                    ['id' => '11d', 'text' => 'Tidak ada perdarahan tapi nyeri', 'value' => 'C'],
                    ['id' => '11e', 'text' => 'Luka kecil sulit sembuh', 'value' => 'L'],
                ],
            ],
            [
                'id' => 12,
                'text' => 'Bagaimana warna urin kamu?',
                'options' => [
                    ['id' => '12a', 'text' => 'Normal tapi jarang', 'value' => 'D'],
                    ['id' => '12b', 'text' => 'Lebih gelap dari biasanya', 'value' => 'M'],
                    ['id' => '12c', 'text' => 'Normal namun sedikit', 'value' => 'T'],
                    ['id' => '12d', 'text' => 'Tidak ada perubahan warna', 'value' => 'C'],
                    ['id' => '12e', 'text' => 'Keruh dan berbau', 'value' => 'L'],
                ],
            ],
            [
                'id' => 13,
                'text' => 'Lingkungan tempat tinggal kamu?',
                'options' => [
                    ['id' => '13a', 'text' => 'Banyak nyamuk di rumah', 'value' => 'D'],
                    ['id' => '13b', 'text' => 'Dekat sawah atau hutan', 'value' => 'M'],
                    ['id' => '13c', 'text' => 'Lingkungan padat penduduk', 'value' => 'T'],
                    ['id' => '13d', 'text' => 'Area perkotaan', 'value' => 'C'],
                    ['id' => '13e', 'text' => 'Sering tergenang air', 'value' => 'L'],
                ],
            ],
            [
                'id' => 14,
                'text' => 'Apakah kamu memiliki riwayat kontak dengan air atau lingkungan berisiko dalam 2 minggu terakhir?',
                'options' => [
                    ['id' => '14a', 'text' => 'Tidak ada kontak dengan genangan air', 'value' => 'D'],
                    ['id' => '14b', 'text' => 'Beraktivitas malam hari di area lembap', 'value' => 'M'],
                    ['id' => '14c', 'text' => 'Mengonsumsi air atau makanan kurang higienis', 'value' => 'T'],
                    ['id' => '14d', 'text' => 'Beraktivitas di area padat tanpa genangan', 'value' => 'C'],
                    ['id' => '14e', 'text' => 'Terkena air banjir atau selokan', 'value' => 'L'],
                ],
            ],
            [
                'id' => 15,
                'text' => 'Bagaimana kondisi tidur kamu?',
                'options' => [
                    ['id' => '15a', 'text' => 'Sulit tidur karena nyeri tubuh', 'value' => 'D'],
                    ['id' => '15b', 'text' => 'Tidur terganggu karena menggigil', 'value' => 'M'],
                    ['id' => '15c', 'text' => 'Tidur tidak nyenyak', 'value' => 'T'],
                    ['id' => '15d', 'text' => 'Sulit tidur karena nyeri sendi', 'value' => 'C'],
                    ['id' => '15e', 'text' => 'Tidur sangat gelisah', 'value' => 'L'],
                ],
            ],
            [
                'id' => 16,
                'text' => 'Bagaimana kondisi mata kamu?',
                'options' => [
                    ['id' => '16a', 'text' => 'Nyeri saat melihat cahaya', 'value' => 'D'],
                    ['id' => '16b', 'text' => 'Mata terasa berat', 'value' => 'M'],
                    ['id' => '16c', 'text' => 'Mata tampak sayu', 'value' => 'T'],
                    ['id' => '16d', 'text' => 'Mata normal tanpa keluhan', 'value' => 'C'],
                    ['id' => '16e', 'text' => 'Mata memerah dan kuning', 'value' => 'L'],
                ],
            ],
            [
                'id' => 17,
                'text' => 'Apakah ada kekakuan tubuh?',
                'options' => [
                    ['id' => '17a', 'text' => 'Badan terasa kaku dan nyeri', 'value' => 'D'],
                    ['id' => '17b', 'text' => 'Badan kaku saat menggigil', 'value' => 'M'],
                    ['id' => '17c', 'text' => 'Badan lemas tanpa kaku', 'value' => 'T'],
                    ['id' => '17d', 'text' => 'Sendi terasa kaku di pagi hari', 'value' => 'C'],
                    ['id' => '17e', 'text' => 'Otot terasa kaku dan nyeri', 'value' => 'L'],
                ],
            ],
            [
                'id' => 18,
                'text' => 'Apakah kamu sering berkeringat?',
                'options' => [
                    ['id' => '18a', 'text' => 'Berkeringat dingin', 'value' => 'D'],
                    ['id' => '18b', 'text' => 'Keringat muncul setelah menggigil', 'value' => 'M'],
                    ['id' => '18c', 'text' => 'Jarang berkeringat', 'value' => 'T'],
                    ['id' => '18d', 'text' => 'Berkeringat normal', 'value' => 'C'],
                    ['id' => '18e', 'text' => 'Keringat berlebihan', 'value' => 'L'],
                ],
            ],
            [
                'id' => 19,
                'text' => 'Sudah berapa lama gejala dirasakan?',
                'options' => [
                    ['id' => '19a', 'text' => '1–3 hari', 'value' => 'D'],
                    ['id' => '19b', 'text' => 'Lebih dari 1 minggu', 'value' => 'M'],
                    ['id' => '19c', 'text' => 'Lebih dari 7 hari berturut-turut', 'value' => 'T'],
                    ['id' => '19d', 'text' => '3–5 hari', 'value' => 'C'],
                    ['id' => '19e', 'text' => '5–10 hari', 'value' => 'L'],
                ],
            ],
            [
                'id' => 20,
                'text' => 'Keluhan paling dominan saat ini?',
                'options' => [
                    ['id' => '20a', 'text' => 'Demam tinggi dan nyeri hebat', 'value' => 'D'],
                    ['id' => '20b', 'text' => 'Demam berulang disertai menggigil', 'value' => 'M'],
                    ['id' => '20c', 'text' => 'Demam lama dan gangguan pencernaan', 'value' => 'T'],
                    ['id' => '20d', 'text' => 'Nyeri sendi sangat dominan', 'value' => 'C'],
                    ['id' => '20e', 'text' => 'Lemas berat dan nyeri otot', 'value' => 'L'],
                ],
            ],
        ];
    }
}

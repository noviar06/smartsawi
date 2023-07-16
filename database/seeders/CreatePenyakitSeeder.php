<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode' => 'P01',
                'nama' => 'Busuk akar dan leher akar',
                'penyebab' => 'Tanah yang terlalu basah, kondisi drainase yang buruk, atau infeksi jamur atau bakteri.',
                'solusi' => 'Pastikan tanah memiliki drainase yang baik, hindari genangan air, perbaiki sirkulasi udara di sekitar akar, dan gunakan fungisida atau bakterisida yang direkomendasikan.',
            ],
            [
                'kode' => 'P02',
                'nama' => 'Kudis (alternaria brassicicola)',
                'penyebab' => 'Jamur Alternaria brassicicola.',
                'solusi' => 'Gunakan varietas yang tahan terhadap kudis, pastikan sanitasi yang baik di kebun, gunakan rotasi tanaman, dan aplikasikan fungisida yang sesuai.',
            ],
            [
                'kode' => 'P03',
                'nama' => 'Hawar daun (pseudomonas syringae pv. Maculicola)',
                'penyebab' => 'Bakteri Pseudomonas syringae pv. maculicola.',
                'solusi' => 'Gunakan varietas yang tahan terhadap hawar daun, lakukan sanitasi kebun yang baik, hindari penyiraman berlebihan, dan aplikasikan bakterisida yang direkomendasikan.',
            ],
            [
                'kode' => 'P04',
                'nama' => 'Penyakit karat (puccinia spp.)',
                'penyebab' => 'Jamur Puccinia spp.',
                'solusi' => 'Gunakan varietas yang tahan terhadap karat, pastikan sanitasi yang baik, jaga sirkulasi udara yang baik di sekitar tanaman, dan aplikasikan fungisida yang direkomendasikan.',
            ],
            [
                'kode' => 'P05',
                'nama' => 'Penyakit layu (fusarium oxysporum f.sp. conglutinans)',
                'penyebab' => 'Jamur Fusarium oxysporum f.sp. conglutinans.',
                'solusi' => 'Gunakan varietas yang tahan terhadap penyakit layu, hindari penggunaan bibit atau tanaman yang terinfeksi, pastikan sanitasi yang baik, dan perbaiki drainase tanah.',
            ],
            [
                'kode' => 'P06',
                'nama' => 'Kanker tangkai (xanthomonas campestris pv. Campestris)',
                'penyebab' => 'Bakteri Xanthomonas campestris pv. campestris.',
                'solusi' => 'Gunakan bibit yang sehat, pastikan sanitasi yang baik, hindari kerusakan fisik pada tanaman, dan aplikasikan bakterisida yang direkomendasikan.',
            ],
            [
                'kode' => 'P07',
                'nama' => 'Layu fusarium (fusarium wilt)',
                'penyebab' => 'Jamur Fusarium spp.',
                'solusi' => 'Gunakan varietas yang tahan terhadap layu Fusarium, pastikan sanitasi yang baik, hindari over-irigasi, perbaiki drainase tanah, dan gunakan fungisida yang direkomendasikan.',
            ],
            [
                'kode' => 'P08',
                'nama' => 'Bercak daun (mychosphaerella capsellae)',
                'penyebab' => 'Jamur Mycosphaerella capsellae.',
                'solusi' => 'Gunakan varietas yang tahan terhadap bercak daun, pastikan sanitasi yang baik, jaga sirkulasi udara yang baik di sekitar tanaman, dan aplikasikan fungisida yang sesuai',
            ],
            [
                'kode' => 'P09',
                'nama' => 'Serangga penghisap seperti kutu daun sawi dan wereng hijau (nephotettix spp.)',
                'penyebab' => 'Serangga penghisap seperti kutu daun sawi dan wereng hijau.',
                'solusi' => 'Gunakan metode pengendalian serangga terpadu, seperti penggunaan predator alami atau parasitoid, aplikasikan insektisida yang direkomendasikan, praktik sanitasi kebun yang baik, dan hindari penumpukan gulma di sekitar tanaman.',
            ],
            [
                'kode' => 'P10',
                'nama' => 'Ulat grayak (pluella xylostella)',
                'penyebab' => 'Ulat grayak (Plutella xylostella).',
                'solusi' => 'Gunakan metode pengendalian terpadu, seperti penggunaan predator alami seperti bubuk Bacillus thuringiensis, aplikasikan insektisida yang direkomendasikan, praktik sanitasi kebun yang baik, dan lakukan rotasi tanaman untuk mengganggu siklus hidup ulat grayak.',
            ],
        ];

        Penyakit::insert($data);
    }
}

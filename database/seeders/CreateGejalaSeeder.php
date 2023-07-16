<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
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
                'kode' => 'G01',
                'nama' => 'Layu',
            ],
            [
                'kode' => 'G02',
                'nama' => 'Daun menguning yang dapat menyebabkan kematian pada tanaman',
            ],
            [
                'kode' => 'G03',
                'nama' => 'Bau busuk pada akar',
            ],
            [
                'kode' => 'G04',
                'nama' => 'Daun dan tangkai berbintik-bintik hitam dan menyebar ke seluruh tanaman.',
            ],
            [
                'kode' => 'G05',
                'nama' => 'Daun tanaman berbintik-bintik kecil berwarna kuning hingga coklat tua',
            ],
            [
                'kode' => 'G06',
                'nama' => 'Kerontokan daun.',
            ],
            [
                'kode' => 'G07',
                'nama' => 'Terdapat bercak berkarat pada permukaan daun tanaman sawi.',
            ],
            [
                'kode' => 'G08',
                'nama' => 'Terdapat bintik-bintik pada tangkai yang membentuk lesi',
            ],
            [
                'kode' => 'G09',
                'nama' => 'Retakan pada tangkai tanaman',
            ],
            [
                'kode' => 'G10',
                'nama' => 'Terdapat bintik-bintik pada tangkai, yang kemudian membentuk lesi, kanker, dan retakan pada tangkai tanaman.',
            ],
            [
                'kode' => 'G11',
                'nama' => 'Warna xylem (jaringan pembuluh angkut air) pada tanaman berubah menjadi coklat.',
            ],
            [
                'kode' => 'G12',
                'nama' => 'Terdapat bercak berwarna coklat pada daun dan hampir menyerupai kudis.',
            ],
            [
                'kode' => 'G13',
                'nama' => 'Tanaman terlihat kerdil',
            ],
            [
                'kode' => 'G14',
                'nama' => 'Daun menguning',
            ],
            [
                'kode' => 'G15',
                'nama' => 'Terdapat bintik-bintik putih diatas daun',
            ],
            [
                'kode' => 'G16',
                'nama' => 'Terdapat lubang pada daun dan bagian kepala yang menghadap ke tanaman tampak kotor karena kotoran ulat',
            ],
            [
                'kode' => 'G17',
                'nama' => 'Tanaman tampak kotor karena kotoran ulat.',
            ],
            [
                'kode' => 'G18',
                'nama' => 'Tangkai atau umbi berwarna dengan tepi kuning kecoklatan',
            ],
            [
                'kode' => 'G19',
                'nama' => 'Bercak berwarna oranye atau kuning pada daun',
            ],
            [
                'kode' => 'G20',
                'nama' => 'Terjadi pengeringan dan kerusakkan pada daun'
            ]
        ];

        Gejala::insert($data);
    }
}

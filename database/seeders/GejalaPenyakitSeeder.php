<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GejalaPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Bau busuk pada akar
            [
                'penyakit_id' => 1,
                'gejala_id' => 1,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 2,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 1,
                'gejala_id' => 3,
                'value_cf' => 0.7
            ],

            // Kudis (alternaria brassicicola)
            [
                'penyakit_id' => 2,
                'gejala_id' => 4,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 12,
                'value_cf' => 0.7
            ],
            [
                'penyakit_id' => 2,
                'gejala_id' => 18,
                'value_cf' => 0.7
            ],
            
            // Hawar daun
            [
                'penyakit_id' => 3,
                'gejala_id' => 5,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 3,
                'gejala_id' => 6,
                'value_cf' => 0.7
            ],

            // Penyakit karat
            [
                'penyakit_id' => 4,
                'gejala_id' => 7,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 4,
                'gejala_id' => 19,
                'value_cf' => 0.8
            ],

            // Penyakit layu
            [
                'penyakit_id' => 5,
                'gejala_id' => 1,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 2,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 5,
                'gejala_id' => 14,
                'value_cf' => 0.8
            ],

            // Kangker tangkai
            [
                'penyakit_id' => 6,
                'gejala_id' => 8,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 9,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 6,
                'gejala_id' => 10,
                'value_cf' => 0.8
            ],

            // Layu fusarium
            [
                'penyakit_id' => 7,
                'gejala_id' => 1,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 2,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 7,
                'gejala_id' => 11,
                'value_cf' => 0.7
            ],

            // Bercak daun
            [
                'penyakit_id' => 8,
                'gejala_id' => 11,
                'value_cf' => 0.7
            ],
            [
                'penyakit_id' => 8,
                'gejala_id' => 20,
                'value_cf' => 0.8
            ],

            // Serangga penghisap
            [
                'penyakit_id' => 9,
                'gejala_id' => 13,
                'value_cf' => 0.6
            ],
            [
                'penyakit_id' => 9,
                'gejala_id' => 14,
                'value_cf' => 0.8
            ],
            [
                'penyakit_id' => 9,
                'gejala_id' => 15,
                'value_cf' => 0.8
            ],

            // Ulat grayak
            [
                'penyakit_id' => 10,
                'gejala_id' => 16,
                'value_cf' => 0.7
            ],
            [
                'penyakit_id' => 10,
                'gejala_id' => 17,
                'value_cf' => 0.8
            ],
        ];

        DB::table('gejala_penyakit')->insert($data);
    }
}

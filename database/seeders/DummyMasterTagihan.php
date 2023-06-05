<?php

namespace Database\Seeders;

use App\Models\MasterTagihan;
use Illuminate\Database\Seeder;

class DummyMasterTagihan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagihanData = [
            [
                'kode_tagihan' => 'THR',
                'nama_tagihan'=> 'Tunjangan Hari Raya',
                'nominal_tagihan'=> 100000
            ],
            [
                'kode_tagihan' => '12',
                'nama_tagihan'=> 'Iuran Desember',
                'nominal_tagihan'=> 100000
            ],
            [
                'kode_tagihan' => '11',
                'nama_tagihan'=> 'Iuran November',
                'nominal_tagihan'=> 100000
            ],
            [
                'kode_tagihan' => '10',
                'nama_tagihan'=> 'Iuran Oktober',
                'nominal_tagihan'=> 100000
            ],
            [
                'kode_tagihan' => '09',
                'nama_tagihan'=> 'Iuran September',
                'nominal_tagihan'=> 110000
            ],
        ];

        foreach ($tagihanData as $key => $val) {
            MasterTagihan::create($val); //dilihat di atas use
        }
    }
}

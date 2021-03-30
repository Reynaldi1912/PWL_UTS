<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_barang=[
            [
                'id_barang' => '1',
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '2500',
                'qty' => '10'
            ],
            [
                'id_barang' => '2',
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Teh Pucuk',
                'kategori_barang' => 'Minuman',
                'harga' => '3500',
                'qty' => '20'
            ],
            [
                'id_barang' => '3',
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Rubik 3x3',
                'kategori_barang' => 'Mainan',
                'harga' => '15000',
                'qty' => '15'
            ],
            [
                'id_barang' => '4',
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Royco Nasi Goreng',
                'kategori_barang' => 'Makanan',
                'harga' => '2000',
                'qty' => '50'
            ],
            [
                'id_barang' => '5',
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Pilow',
                'kategori_barang' => 'Makanan',
                'harga' => '10000',
                'qty' => '20'
            ],
            [
                'id_barang' => '6',
                'kode_barang' => 'PRD006',
                'nama_barang' => 'Pistol Mainan',
                'kategori_barang' => 'Mainan',
                'harga' => '35000',
                'qty' => '13'
            ],
            [
                'id_barang' => '7',
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Papan Gambar',
                'kategori_barang' => 'Mainan',
                'harga' => '40000',
                'qty' => '30'
            ],
            [
                'id_barang' => '8',
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Pocari Sweat',
                'kategori_barang' => 'Minuman',
                'harga' => '7000',
                'qty' => '23'
            ],
            [
                'id_barang' => '9',
                'kode_barang' => 'PRD009',
                'nama_barang' => 'IndoMilk',
                'kategori_barang' => 'Minuman',
                'harga' => '8000',
                'qty' => '16'
            ]
            , [
                'id_barang' => '10',
                'kode_barang' => 'PRD010',
                'nama_barang' => 'Fanta 400ml',
                'kategori_barang' => 'Minuman',
                'harga' => '5000',
                'qty' => '20'
            ],
            [
                'id_barang' => '11',
                'kode_barang' => 'PRD011',
                'nama_barang' => 'Fanta 1500ml',
                'kategori_barang' => 'Minuman',
                'harga' => '12000',
                'qty' => '20'
            ],
            [
                'id_barang' => '12',
                'kode_barang' => 'PRD012',
                'nama_barang' => 'Kacang Goreng',
                'kategori_barang' => 'Makanan',
                'harga' => '11000',
                'qty' => '40'
            ],
            [
                'id_barang' => '13',
                'kode_barang' => 'PRD013',
                'nama_barang' => 'Coklat',
                'kategori_barang' => 'Makanan',
                'harga' => '15000',
                'qty' => '26'
            ],
            [
                'id_barang' => '14',
                'kode_barang' => 'PRD014',
                'nama_barang' => 'Pedang Mainan',
                'kategori_barang' => 'Mainan',
                'harga' => '30000',
                'qty' => '20'
            ],
            [
                'id_barang' => '15',
                'kode_barang' => 'PRD015',
                'nama_barang' => 'Sarung Tinju',
                'kategori_barang' => 'Mainan',
                'harga' => '50000',
                'qty' => '15'
            ],
            [
                'id_barang' => '16',
                'kode_barang' => 'PRD016',
                'nama_barang' => 'Mouse Logitech',
                'kategori_barang' => 'Electronic',
                'harga' => '100000',
                'qty' => '5'
            ],
            [
                'id_barang' => '17',
                'kode_barang' => 'PRD017',
                'nama_barang' => 'Drawing Pad',
                'kategori_barang' => 'Electronic',
                'harga' => '200000',
                'qty' => '10'
            ],
            [
                'id_barang' => '18',
                'kode_barang' => 'PRD018',
                'nama_barang' => 'Headset',
                'kategori_barang' => 'Electronic',
                'harga' => '50000',
                'qty' => '75'
            ],
            [
                'id_barang' => '19',
                'kode_barang' => 'PRD019',
                'nama_barang' => 'Keyboard',
                'kategori_barang' => 'Electronic',
                'harga' => '250000',
                'qty' => '15'
            ],
            [
                'id_barang' => '20',
                'kode_barang' => 'PRD020',
                'nama_barang' => 'Speaker',
                'kategori_barang' => 'ELectronic',
                'harga' => '110000',
                'qty' => '16'
            ]

        ];
        DB::table('barang')->insert($data_barang);
    }
}

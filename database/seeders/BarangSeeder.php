<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            'nama_barang'   => 'wew',
            'kode_barang'   => 'aqw',
            'harga_barang'  => 2000,
            'deskripsi_barang' => 'wfwf',  // Tanpa spasi ekstra
            'satuan_barang' => 1           // Tanpa spasi ekstra
        ]);
    }
}

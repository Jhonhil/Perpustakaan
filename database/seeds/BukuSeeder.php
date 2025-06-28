<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run()
    {
        DB::table('buku')->insert([
            [
                'kode_buku' => 'BK001',
                'judul' => 'Laravel untuk Pemula',
                'pengarang' => 'Yohanes Hilapok',
                'kategori' => 'Pemrograman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_buku' => 'BK002',
                'judul' => 'Belajar SQLite',
                'pengarang' => 'YH Dev',
                'kategori' => 'Database',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

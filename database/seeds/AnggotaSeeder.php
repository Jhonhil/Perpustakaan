<?php
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('anggota')->insert([
            [
                'nim' => '72230670',
                'nama_anggota' => 'Yohanes Hilapok',
                'prodi' => 'Informatika',
                'hp' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '72230001',
                'nama_anggota' => 'Maria Lestari',
                'prodi' => 'Sistem Informasi',
                'hp' => '081222223333',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

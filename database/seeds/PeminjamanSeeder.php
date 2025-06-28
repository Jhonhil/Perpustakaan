<?php
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('peminjaman')->insert([
            [
                'id_petugas' => 1,
                'id_anggota' => 1,
                'id_buku' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_petugas' => 2,
                'id_anggota' => 2,
                'id_buku' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

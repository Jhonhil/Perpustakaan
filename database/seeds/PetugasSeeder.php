<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    public function run()
    {
        DB::table('petugas')->insert([
            [
                'nama_petugas' => 'Admin Perpus',
                'hp' => '081111111111',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_petugas' => 'Petugas 2',
                'hp' => '082222222222',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BukuSeeder::class,
            AnggotaSeeder::class,
            PetugasSeeder::class,
            PeminjamanSeeder::class,
        ]);
    }
}

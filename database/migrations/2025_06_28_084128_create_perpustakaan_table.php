<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanTable extends Migration
{
    public function up()
    {
        // Tabel anggota
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->string('nim', 30);
            $table->string('nama_anggota', 100);
            $table->string('prodi', 20);
            $table->string('hp', 20);
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
            $table->dateTime('updated_at');
        });

        // Tabel buku
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('kode_buku', 10);
            $table->string('judul', 100);
            $table->string('pengarang', 50);
            $table->string('kategori', 50);
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
            $table->dateTime('updated_at');
        });

        // Tabel petugas
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('id_petugas');
            $table->string('nama_petugas', 100);
            $table->string('hp', 30);
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
            $table->dateTime('updated_at');
        });

        // Tabel peminjaman
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id_pinjam');
            $table->integer('id_petugas');
            $table->integer('id_anggota');
            $table->integer('id_buku');
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
            $table->dateTime('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
        Schema::dropIfExists('petugas');
        Schema::dropIfExists('buku');
        Schema::dropIfExists('anggota');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    protected $table = "anggota";
    protected $primaryKey = "id_anggota";
    protected $fillable = ['nim', 'nama_anggota', 'prodi', 'hp'];
}
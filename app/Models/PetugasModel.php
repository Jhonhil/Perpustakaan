<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetugasModel extends Model
{

    protected $table = "petugas";
    protected $primaryKey = "id_petugas";
    protected $fillable = ['nama_petugas', 'hp'];
}
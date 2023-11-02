<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';
    protected $primaryKey = 'id';
    protected $fillable = ['nomor_petugas','nama_petugas','alamat_petugas','nomor_telepon'];
}

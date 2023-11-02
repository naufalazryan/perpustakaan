<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $fillable = ['nomor_anggota', 'nama_anggota', 'alamat_anggota', 'jenis_kelamin', 'nomor_telepon'];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'nomor_anggota', 'nomor_anggota');
    }
}

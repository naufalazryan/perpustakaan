<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nomor_pinjam',
        'tanggal_pinjam',
        'tanggal_kembali',
        'id_buku',
        'id_anggota',
        'id_petugas',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }
    

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas', 'id');
    }

    public static $rules = [
        'nomor_pinjam' => 'unique:peminjaman',
    ];
}

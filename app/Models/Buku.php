<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = ['kode_buku', 'judul_buku', 'jenis_buku', 'pengarang', 'tahun_penerbit', 'penerbit', 'status','cover'];

    public function getStatusLabelAttribute()
    {
        if ($this->status === null) {
            return 'Tersedia';
        } elseif ($this->status == 1) {
            return 'Dipinjam';
        }
    }
    
}

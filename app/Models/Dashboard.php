<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    
    public static function getTotalBuku()
    {
        return Buku::count();
    }

    public static function getTotalAnggota()
    {
        return Anggota::count();
    }

    public static function getTotalPetugas()
    {
        return Petugas::count();
    }
}

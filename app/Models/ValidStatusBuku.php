<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidStatusBuku extends Model
{
    public function passes ($attribute, $value)
    {
        $buku = Buku::find($value);
        return $buku && $buku->status == 0;
    }

    public function message()
    {
        return 'Buku tidak tersedia';
    }
}

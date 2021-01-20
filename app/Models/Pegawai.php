<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class, 'id', 'id_pegawai');
    }
}

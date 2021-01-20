<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis', 'id');
    }
    public function barang()
    {
        return $this->hasMany(Stock::class, 'id', 'id_barang');
    }
    public function pesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id', 'id_barang');
    }
}

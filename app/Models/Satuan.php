<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    public function packing()
    {
        return $this->hasMany(Packing::class, 'id', 'satuan');
    }
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id', 'satuan');
    }
    public function penerimaan()
    {
        return $this->hasMany(Penerimaan::class, 'id', 'satuan');
    }
}

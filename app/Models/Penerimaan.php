<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id');
    }
    public function packing()
    {
        return $this->belongsTo(Packing::class, 'no_batch', 'no_batch');
    }
    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan', 'id');
    }
}

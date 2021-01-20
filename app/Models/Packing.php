<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packing extends Model
{
    use HasFactory;
    public function stock()
    {
        return $this->hasMany(Stock::class, 'id', 'id_packing');
    }
    public function penerimaan()
    {
        return $this->hasOne(Penerimaan::class, 'no_batch', 'no_batch');
    }
    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan', 'id');
    }
}

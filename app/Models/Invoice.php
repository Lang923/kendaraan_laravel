<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id_kwitansi',
        'id_penyewa',
        'no_pol'
    ];

    // Definisikan relasi ke model Kwitansi
    public function kwitansi()
    {
        return $this->belongsTo(Kwitansi::class, 'id_kwitansi');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    // Definisikan relasi ke model Kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id', 'id');
    }

}

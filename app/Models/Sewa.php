<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewa';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id',
        'no_pol',
        'tgl_sewa',
        'tgl_selesai',
        'tlp_tujuan',
        'alamat_tujuan',
        'biaya_tujuan',
        'kota',
        'id_penyewa',
        'jlh_penumpang',
        'id_kwitansi'
    ];

    // Definisikan relasi ke model Kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id', 'id');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    // Definisikan relasi ke model Kwitansi
    public function kwitansi()
    {
        return $this->belongsTo(Kwitansi::class, 'id_kwitansi');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'no_pol';
    protected $fillable =[
        'id',
        'no_pol',
        'no_mesin',
        'jenis_mobil',
        'nama_mobil',
        'merek',
        'kapasitas',
        'tarif',
    ];
    public function sewa()
    {
        return $this->hasMany(Sewa::class, 'id', 'id');
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'id', 'id');
    }
}

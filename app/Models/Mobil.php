<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Mobil extends Model
{
    protected $collection = 'mobil';
    protected $fillable = ['mesin', 'kapasitas_penumpang', 'tipe', 'status'];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Mobil extends Model
{
    protected $collection = 'mobil';
    protected $fillable = ['mesin', 'kapasitas_penumpang', 'tipe'];

    public function kendaraan()
    {
        return $this->hasOne(Kendaraan::class);
    }
    use HasFactory;
}

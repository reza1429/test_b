<?php

namespace App\Models;

// use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Carbon;

class Mobil extends Model
{
    protected $collection = 'mobil';
    protected $fillable = ['mesin', 'kapasitas_penumpang', 'tipe', 'status', 'updated_at'];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    // public function getUpdatedAtAttribute(){
    //     return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l, j F Y H:i');
    // }
    use HasFactory;
}

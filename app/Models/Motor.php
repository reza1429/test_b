<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Motor extends Model
{
    protected $collection = 'motor';

    protected $fillable = [
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
        'status',
        'updated_at'
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    // public function getUpdatedAtAttribute(){
    //     return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l, j F Y H:i');
    // }
    use HasFactory;
}

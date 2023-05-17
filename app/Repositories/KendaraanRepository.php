<?php

namespace App\Repositories;

use App\Models\Kendaraan;
use App\Models\Motor;
use App\Models\Mobil;

class KendaraanRepository implements KendaraanRepositoryInterface
{
    protected $kendaraan;
    protected $motor;
    protected $mobil;

    public function __construct(Kendaraan $kendaraan, Motor $motor, Mobil $mobil)
    {
        $this->kendaraan = $kendaraan;
        $this->motor = $motor;
        $this->mobil = $mobil;
    }

    public function getStokKendaraan()
    {
        $motor = Motor::where('status', 0)->with('kendaraan')->get();
        $mobil = Mobil::where('status', 0)->with('kendaraan')->get();
        
        return [$mobil, $motor];
    }
    
    public function getPenjualanKendaraan()
    {
        $motor = Motor::where('status', 1)->with('kendaraan')->orderBy('updated_at', 'asc')->get();
        $mobil = Mobil::where('status', 1)->with('kendaraan')->orderBy('updated_at', 'asc')->get();
        
        return [$mobil, $motor];
    }
}

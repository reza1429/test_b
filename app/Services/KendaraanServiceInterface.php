<?php

namespace App\Services;

interface KendaraanServiceInterface
{
    public function getStokKendaraan();

    public function createKendaraan(array $data);

    public function getPenjualanKendaraan();

    public function getLaporanPenjualanKendaraan();
}

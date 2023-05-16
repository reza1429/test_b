<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface KendaraanRepositoryInterface
{
    public function getStokKendaraan(): Collection;

    public function createKendaraan(array $data): bool;

    public function getPenjualanKendaraan(): Collection;

    public function getLaporanPenjualanKendaraan(): Collection;
}

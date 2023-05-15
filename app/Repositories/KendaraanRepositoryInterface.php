<?php

namespace App\Repositories;

use App\Models\Kendaraan;

interface KendaraanRepositoryInterface
{
    public function getStokKendaraan(): array;

    public function createKendaraan(array $data): Kendaraan;

    public function getPenjualanKendaraan(): array;

    public function getLaporanPenjualanKendaraan(string $kendaraanId): array;
}

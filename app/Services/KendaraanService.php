<?php

namespace App\Services;

use App\Repositories\KendaraanRepositoryInterface;

class KendaraanService implements KendaraanServiceInterface
{
    protected $kendaraanRepository;

    public function __construct(KendaraanRepositoryInterface $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function getStokKendaraan()
    {
        return $this->kendaraanRepository->getStokKendaraan();
    }

    public function getPenjualanKendaraan()
    {
        return $this->kendaraanRepository->getPenjualanKendaraan();
    }
}

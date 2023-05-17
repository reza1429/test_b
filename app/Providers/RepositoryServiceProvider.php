<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\KendaraanRepositoryInterface;
use App\Repositories\KendaraanRepository;
use App\Services\KendaraanServiceInterface;
use App\Services\KendaraanService;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(KendaraanRepositoryInterface::class, KendaraanRepository::class);
        $this->app->bind(KendaraanServiceInterface::class, KendaraanService::class);
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

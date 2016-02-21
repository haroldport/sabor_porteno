<?php

namespace Atomcorp\Providers;

use Atomcorp\Http\Application\Contract\IEstablishmentService;
use Atomcorp\Http\Application\Impl\EstablishmentService;
use Atomcorp\Http\Repositories\Contract\IEstablishmentRepository;
use Atomcorp\Http\Repositories\Impl\EstablishmentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IEstablishmentRepository::class, EstablishmentRepository::class);
        $this->app->bind(IEstablishmentService::class, EstablishmentService::class);
    }
}

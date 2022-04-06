<?php

namespace App\Providers;

use App\Services\League\LeagueService;
use App\Services\League\LeagueServiceInterface;
use App\Services\Duel\DuelService;
use App\Services\Duel\DuelServiceInterface;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DuelServiceInterface::class, DuelService::class);
        $this->app->bind(LeagueServiceInterface::class, LeagueService::class );
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

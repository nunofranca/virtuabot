<?php

namespace App\Providers;

use App\Repositories\Duel\DuelRepositoryEloquent;
use App\Repositories\Duel\DuelRepositoryInterface;
use App\Repositories\League\LeagueRepositoryEloquent;
use App\Repositories\League\LeagueRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DuelRepositoryInterface::class, DuelRepositoryEloquent::class);
        $this->app->bind(LeagueRepositoryInterface::class, LeagueRepositoryEloquent::class);
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

<?php

namespace App\Providers;

use App\Repositories\Duel\DuelRepositoryEloquent;
use App\Repositories\Duel\DuelRepositoryInterface;
use App\Repositories\League\LeagueRepositoryEloquent;
use App\Repositories\League\LeagueRepositoryInterface;
use App\Repositories\Scoreboard\ScoreboardRepositoryEloquent;
use App\Repositories\Scoreboard\ScoreboardRepositoryInterface;
use App\Repositories\Signal\SignalRepositoryEloquent;
use App\Repositories\Signal\SignalRepositoryInterface;
use App\Repositories\Strategy\StrategyRepositoryEloquent;
use App\Repositories\Strategy\StrategyRepositoryInterface;
use App\Services\Strategy\StrategyService;
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
        $this->app->bind(StrategyRepositoryInterface::class, StrategyRepositoryEloquent::class);
        $this->app->bind(ScoreboardRepositoryInterface::class, ScoreboardRepositoryEloquent::class);
        $this->app->bind(SignalRepositoryInterface::class, SignalRepositoryEloquent::class);
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

<?php

namespace App\Providers;


use App\Services\ApiTelegram\TelegramService;
use App\Services\ApiTelegram\TelegramServiceInterface;
use App\Services\League\LeagueService;
use App\Services\League\LeagueServiceInterface;
use App\Services\Duel\DuelService;
use App\Services\Duel\DuelServiceInterface;
use App\Services\Scoreboard\ScoreboardService;
use App\Services\Scoreboard\ScoreboardServiceInterface;
use App\Services\Signal\SignalService;
use App\Services\Signal\SignalServiceInterface;
use App\Services\Strategy\StrategyService;
use App\Services\Strategy\StrategyServiceInterface;
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
        $this->app->bind(TelegramServiceInterface::class, TelegramService::class);
        $this->app->bind(StrategyServiceInterface::class, StrategyService::class);
        $this->app->bind(ScoreboardServiceInterface::class, ScoreboardService::class);
        $this->app->bind(SignalServiceInterface::class, SignalService::class);
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

<?php

namespace App\Services\Scoreboard;

use App\Repositories\Scoreboard\ScoreboardRepositoryInterface;
use App\Services\Duel\DuelServiceInterface;

class ScoreboardService implements ScoreboardServiceInterface
{
    private ScoreboardRepositoryInterface $scoreboardRepository;
    private DuelServiceInterface $duelService;

    public function __construct(ScoreboardRepositoryInterface $scoreboardRepository, DuelServiceInterface $duelService)
    {
        $this->scoreboardRepository = $scoreboardRepository;
        $this->duelService = $duelService;
    }


    public function getAll()
    {
        return $this->scoreboardRepository->getAll();
    }

    public function getById($id)
    {
        return $this->scoreboardRepository->getById($id);
    }

    public function create($attributes)
    {

        $result = explode(' - ', $attributes['result']);
        return $result;
        $leagueHour = explode(' - ', $attributes['leagueHour']);


        $league = $leagueHour[0];
        $hour = $leagueHour[1];
        $home = $result[0];
        $visit = $result[1];

        $duel = $this->duelService->getByHourAndLeague($attributes);
        return $duel;

//        $attributes = [
//            'duel_id' =>
//        ];




        $attributes = [
            'duel_id'
        ];

        return $leagueHour;
        $this->scoreboardRepository->create($attributes);
    }
}

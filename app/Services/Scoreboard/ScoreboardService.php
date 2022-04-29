<?php

namespace App\Services\Scoreboard;

use App\Repositories\Scoreboard\ScoreboardRepositoryInterface;

class ScoreboardService implements ScoreboardServiceInterface
{
    private ScoreboardRepositoryInterface $scoreboardRepository;

    public function __construct(ScoreboardRepositoryInterface $scoreboardRepository)
    {
        $this->scoreboardRepository = $scoreboardRepository;
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
        $result = explode('-', $attributes['result']);
        return $result;
        $this->scoreboardRepository->create($attributes);
    }
}

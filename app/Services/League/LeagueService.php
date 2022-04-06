<?php

namespace App\Services\League;

use App\Repositories\League\LeagueRepositoryInterface;

class LeagueService implements LeagueServiceInterface
{
    private LeagueRepositoryInterface $leagueRepository;

    public function __construct(LeagueRepositoryInterface $leagueRepository)
    {
        $this->leagueRepository = $leagueRepository;
    }

    public function getAll()
    {
        return $this->leagueRepository->getAll();
    }
    public function create($attributes)
    {
        return $this->leagueRepository->create($attributes);
    }

    public function find($id)
    {
        return $this->leagueRepository->find($id);
    }

    public function update($attributes, $id)
    {
        return $this->leagueRepository->update($attributes, $id);
    }
}

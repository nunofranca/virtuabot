<?php

namespace App\Services\Duel;

use App\Repositories\Duel\DuelRepositoryInterface;

class DuelService implements DuelServiceInterface
{
    private DuelRepositoryInterface $duelRepository;

    public function __construct(DuelRepositoryInterface $duelRepository)
    {
        return $this->duelRepository = $duelRepository;

    }

    public function getAll()
    {
        return $this->duelRepository->getAll();
    }

    public function create($attributes)
    {
       return $this->duelRepository->create($attributes);

    }

    public function find($id)
    {
        return $this->duelRepository->find($id);
    }

    public function update($attributes, $id)
    {
        return $this->duelRepository->update($attributes, $id);
    }

    public function nextDuels()
    {
        return $this->duelRepository->nextDuels();
    }

    public function getByHourAndLeague($attributes)
    {
        $this->duelRepository->getByHourAndLeague($attributes);
    }



}

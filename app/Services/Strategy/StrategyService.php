<?php

namespace App\Services\Strategy;

use App\Repositories\Strategy\StrategyRepositoryInterface;

class StrategyService implements StrategyServiceInterface
{
    private StrategyRepositoryInterface $strategyRepository;
    public function __construct(StrategyRepositoryInterface $strategyRepository)
    {
        $this->strategyRepository = $strategyRepository;
    }


    public function create($attributes)
    {
       return $this->strategyRepository->create($attributes);
    }

    public function getAll()
    {
       return $this->strategyRepository->getAll();
    }

    public function getById($id)
    {
       return $this->strategyRepository->getById($id);
    }
}

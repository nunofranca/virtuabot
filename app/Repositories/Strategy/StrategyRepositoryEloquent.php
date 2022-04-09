<?php

namespace App\Repositories\Strategy;
use App\Models\Strategy;
use App\Repositories\BaseRepository;

class StrategyRepositoryEloquent extends BaseRepository implements StrategyRepositoryInterface
{
    public function __construct(Strategy $strategy)
    {
        parent::__construct($strategy);
    }
}

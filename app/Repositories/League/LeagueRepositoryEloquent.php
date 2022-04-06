<?php

namespace App\Repositories\League;

use App\Models\League;
use App\Repositories\BaseRepository;

class LeagueRepositoryEloquent extends BaseRepository implements LeagueRepositoryInterface
{
    public function __construct(League $league)
    {
        parent::__construct($league);
    }
}

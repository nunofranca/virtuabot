<?php

namespace App\Repositories\Scoreboard;

use App\Models\Scoreboard;
use App\Repositories\BaseRepository;

class ScoreboardRepositoryEloquent extends BaseRepository implements ScoreboardRepositoryInterface
{
    public function __construct(Scoreboard $scoreboard)
    {
        parent::__construct($scoreboard);
    }
}

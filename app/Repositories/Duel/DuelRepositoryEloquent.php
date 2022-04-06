<?php

namespace App\Repositories\Duel;

use App\Models\Duel;
use App\Repositories\BaseRepository;

class DuelRepositoryEloquent extends BaseRepository implements DuelRepositoryInterface
{
    public function __construct(Duel $duel)
    {
        parent::__construct($duel);
    }

    public function nextDuels()
    {
        return Duel::take('5')->get();
    }

}

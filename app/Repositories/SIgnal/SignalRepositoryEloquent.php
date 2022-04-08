<?php

namespace App\Repositories\SIgnal;

use App\Models\Signal;
use App\Repositories\BaseRepository;

class SignalRepositoryEloquent extends BaseRepository implements SignalRepositoryInterface
{
    public function __construct(Signal $signal)
    {
        parent::__construct($signal);
    }

}

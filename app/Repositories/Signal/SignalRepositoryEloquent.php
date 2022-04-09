<?php

namespace App\Repositories\Signal;

use App\Models\Signal;
use App\Repositories\BaseRepository;

class SignalRepositoryEloquent extends BaseRepository implements SignalRepositoryInterface
{
    public function __construct(Signal $signal)
    {
        parent::__construct($signal);
    }

    public function getByStrategy($id)
    {
        return Signal::where('strategy_id', $id)->get();
    }

}

<?php

namespace App\Repositories\Scoreboard;

interface ScoreboardRepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function create($attributes);
}

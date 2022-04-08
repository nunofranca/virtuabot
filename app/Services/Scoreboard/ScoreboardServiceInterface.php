<?php

namespace App\Services\Scoreboard;

interface ScoreboardServiceInterface
{
    public function getAll();

    public function getById($id);

    public function create($attributes);
}

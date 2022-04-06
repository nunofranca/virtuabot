<?php

namespace App\Services\League;

interface LeagueServiceInterface
{
    public function getAll();

    public function create($attributes);

    public function find($id);

    public function update($attributes, $id);
}

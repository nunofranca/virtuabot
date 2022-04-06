<?php

namespace App\Repositories\League;

interface LeagueRepositoryInterface
{
    public function getAll();

    public function create($attributes);

    public function find($id);

    public function update($attributes, $id);
}

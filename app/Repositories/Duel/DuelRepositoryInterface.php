<?php

namespace App\Repositories\Duel;

interface DuelRepositoryInterface
{
    public function getAll();

    public function create($attributes);

    public function getById($id);

    public function update($attributes, $id);

    public function nextDuels();
}

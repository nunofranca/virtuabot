<?php

namespace App\Services\Duel;

interface DuelServiceInterface
{
    public function getAll();

    public function create($attributes);

    public function find($id);

    public function update($attributes, $id);

    public function nextDuels();
}

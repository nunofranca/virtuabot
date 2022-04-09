<?php

namespace App\Services\Strategy;

interface StrategyServiceInterface
{
    public function create($attributes);

    public function getAll();

    public function getById($id);

}

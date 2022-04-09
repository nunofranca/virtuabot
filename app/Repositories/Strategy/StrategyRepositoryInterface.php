<?php

namespace App\Repositories\Strategy;

interface StrategyRepositoryInterface
{
    public function create($attributes);

    public function getAll();

    public function getById($id);

}

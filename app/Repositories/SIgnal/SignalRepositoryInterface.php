<?php

namespace App\Repositories\SIgnal;

interface SignalRepositoryInterface
{
    public function getAll();

    public function create($attributes);

    public function withTrashed();

    public function update($attributes, $id);
}

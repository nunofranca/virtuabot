<?php

namespace App\Repositories\Signal;

interface SignalRepositoryInterface
{
    public function getAll();

    public function create($attributes);

    public function withTrashed();

    public function update($attributes, $id);

    public function getByStrategy($id);

    public function getById($id);
}

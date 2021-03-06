<?php

namespace App\Services\Signal;

interface SignalServiceInterface
{
    public function getAll();

    public function create($attributes);

    public function withTrashed();

    public function udpate($attributes, $id);

    public function getByStrategy($id);

    public function getById($id);
}

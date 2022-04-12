<?php

namespace App\Services\Signal;

use App\Repositories\Signal\SignalRepositoryInterface;

class SignalService implements SignalServiceInterface
{
    private SignalRepositoryInterface $signalRepository;

    public function __construct(SignalRepositoryInterface $signalRepository)
    {
        $this->signalRepository = $signalRepository;
    }
    public function getAll()
    {
       return $this->signalRepository->getAll();
    }

    public function create($attributes)
    {
        return $this->signalRepository->create($attributes);
    }

    public function withTrashed()
    {
        return $this->signalRepository->withTrashed();
    }

    public function udpate($attributes, $id)
    {
        return $this->signalRepository->update($attributes, $id);
    }

    public function getByStrategy($id)
    {
       return $this->signalRepository->getByStrategy($id);
    }

    public function getById($id)
    {
        return $this->signalRepository->getById($id);
    }
}

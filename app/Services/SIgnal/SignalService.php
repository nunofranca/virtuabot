<?php

namespace App\Services\SIgnal;

use App\Repositories\SIgnal\SignalRepositoryInterface;

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

}

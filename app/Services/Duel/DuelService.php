<?php

namespace App\Services\Duel;

use App\Repositories\Duel\DuelRepositoryInterface;
use App\Services\ApiTelegram\TelegramService;
use App\Services\ApiTelegram\TelegramServiceInterface;
use TelegramBot\Api\BotApi;

class DuelService implements DuelServiceInterface
{
    private DuelRepositoryInterface $duelRepository;
    private TelegramServiceInterface $telegramService;

    public function __construct(DuelRepositoryInterface $duelRepository, TelegramServiceInterface $telegramService)
    {
        $this->duelRepository = $duelRepository;
        $this->telegramService = $telegramService;
    }

    public function getAll()
    {
        return $this->duelRepository->getAll();
    }

    public function create($attributes)
    {
        $this->duelRepository->create($attributes);

        return $this->telegramService->sendMessage('Duelo Cadastrado - '. $attributes['hour']);


    }

    public function find($id)
    {
        return $this->duelRepository->find($id);
    }

    public function update($attributes, $id)
    {
        return $this->duelRepository->update($attributes, $id);
    }

    public function nextDuels()
    {
        return $this->duelRepository->nextDuels();
    }

    public function getByHourAndLeague($attributes)
    {
        $this->duelRepository->getByHourAndLeague($attributes);
    }



}

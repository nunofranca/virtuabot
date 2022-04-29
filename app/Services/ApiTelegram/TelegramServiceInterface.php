<?php

namespace App\Services\ApiTelegram;

interface TelegramServiceInterface
{
    public function sendMessage($message);
}

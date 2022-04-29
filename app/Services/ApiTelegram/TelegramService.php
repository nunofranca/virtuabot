<?php

namespace App\Services\ApiTelegram;


use TelegramBot\Api\BotApi;

class TelegramService implements TelegramServiceInterface
{


    public function sendMessage($message)
    {
        $messageBot = new BotApi(env('TOKEN_BOT_TELEGRAM'));
        return $messageBot->sendMessage(env('CHAT_BOT_TELEGRAM'), $message, 'html');

        //$messageBot->setWebhook('https://app-36652.nuvem-us-04.absamcloud.com/test');
    }
}

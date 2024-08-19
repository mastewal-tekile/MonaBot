<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class TelegramBotController extends Controller
{
    public function webhook(Request $request)
    {
        $telegram = new Api(config('services.telegram.token'));
        $telegram->getUpdates();

        return response()->json(['status' => 'ok']);
    }
}

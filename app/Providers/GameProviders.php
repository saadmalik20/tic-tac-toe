<?php

namespace App\Providers;

use App\Helpers\GameHelper;

class GameProviders implements IGameProviders
{

    public static function makeMove($boardState, $playerUnit = 'X') {
        $gameHelpers = new GameHelper();
        // Scanning if already someone win
        $response = $gameHelpers->scanningTurns($boardState);
        if (isset($response[3])) return $response;

        // If no one win yet, then proceed with robot turn
        $botResponse = $gameHelpers->botTurn($boardState);
        if (isset($botResponse[3])) return $botResponse;


        return $botResponse;
    }
}
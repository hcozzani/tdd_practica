<?php namespace src;

use src\BingoCaller;

class BingoWinnerChecker
{
    public static function isWinner(BingoCaller $caller, Card $card)
    {
        $cardNumbers = $card->getNumbersInCard();

        foreach ($cardNumbers as $cardNumber){
            if (!$caller->hasCalledNumber($cardNumber)){
                return false;
            }
        }
        return true;
    }
}

?>
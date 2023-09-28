<?php

use PHPUnit\Framework\TestCase;
use src\BingoWinnerChecker;
use src\BingoCaller;
use src\BingoCardGenerator;

class BingoWinnerCheckerTest extends TestCase
{

    public function testeCheckerDeterminesNotWinnerYet()
    {
        $caller = new BingoCaller();
        $cardGenerator = new BingoCardGenerator();
        $card = $cardGenerator->generate();
    
        for ($i = 1; $i <= 20; ++$i) {
            $caller->callNumber();
        }
    
        $this->assertFalse(BingoWinnerChecker::isWinner($caller, $card));
    }
    
    public function testeCheckerDeterminesAWinnerCorrectly()
    {
        $caller = new BingoCaller();
        $cardGenerator = new BingoCardGenerator();
        $card = $cardGenerator->generate();
    
        for ($i = 1; $i <= 75; ++$i) {
            $caller->callNumber();
        }
    
        $this->assertTrue(BingoWinnerChecker::isWinner($caller, $card));
    }
}
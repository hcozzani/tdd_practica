<?php
#hereda la directiva use
use PHPUnit\Framework\TestCase;
use src\BingoCardGenerator;

class BingoCardGeneratorTest extends TestCase
{
    public function testCardContainsValidNumbersRespectingColumnBoundaries()
    {
        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        $this->assertTrue($card->isValid());
    }

    public function testCardHasFreeSpaceInTheMiddle()
    {
        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        $this->assertNull($card->hasFreeSpaceInTheMiddle());
    }
}

?>

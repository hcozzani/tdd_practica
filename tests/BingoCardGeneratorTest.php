<?php
#hereda la directiva use
use PHPUnit\Framework\TestCase;
use src\BingoCardGenerator;

class BingoCardGeneratorTest extends TestCase
{
    public function testCardContainsValidNumbersAccordingToColumn()
    {
        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        $this->assertTrue($card->isValid());

    }

}

?>

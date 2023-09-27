<?php
#hereda la directiva use
use PHPUnit\Framework\TestCase;
use src\BingoCaller;

class BingoCallerTest extends TestCase
{
    public function testWhenCallsNumberItsInTheValidRange()
    {
        $caller = new BingoCaller();
        $number = $caller->callNumber();

        #valido que la condicion sea verdadera con el metodo assertTrue
        $this->assertTrue(condition:$number >= 1 && $number <= 75);
    }

    public function testWhenCalls75TimesAllNumbersArePresent()
    {
        $caller = new BingoCaller();
        $calledNumbers = [];
        $expectedNumbers = range(start:1, end:75);

        for($i=1;$i<=75;++$i)
        {
            $calledNumbers[] = $caller->callNumber();
        }

        sort(array:$calledNumbers);
        $this->assertEquals($expectedNumbers, $calledNumbers);

        
    }
}

?>
<?php namespace Models;

class Card
{
    private $grid;

    public function __construct($grid)
    {
        #declaro la grilla que tiene que ser de 5x5
        $this->grid = $grid;
    }

    public function isValid(): bool #tiene que ser valor booleano
    {
        #valido tamaño y valido si se respetan los limites
        return $this->hasValidSize() && $this->respectBoundaries();
    }

    private function hasValidSize():bool
    {
        foreach ($this->grid as $column)
        {
            if (sizeof($column) !== 5)
                return false; 
        }
        return true;

    }

    private function respectBoundaries():bool
    {
        return
        $this->columnHasElementsBetween($this->grid['B'],min:1, max:15)
        && $this->columnHasElementsBetween($this->grid['I'],  min:16, max:30)
        && $this->columnHasElementsBetween($this->grid['B'], min:31, max:45)
        && $this->columnHasElementsBetween($this->grid['N'],  min:46, max:60)
        && $this->columnHasElementsBetween($this->grid['G'],  min: 61, max:75);
    }

    private function columnHasElementsBetween($column,$min,$max): bool
    {
        foreach ($column as $number) {
            if ($number < $min || $number > $max)
                return false;
        }
        return true;
    }
}

?>
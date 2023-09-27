<?php

namespace src;
use Models\Card;

class BingoCardGenerator
{
 private $grid = [
    'B'=>[],
    'I'=>[],
    'N'=>[],
    'G'=>[],
    'O'=>[]
 ];

 public function generate(): Card
 {
   #generamos numeros para las 5 columnas
   $this->grid['B'] = $this-> generateColumnWithBoundaries(1,15);
   $this->grid['B'] = $this-> generateColumnWithBoundaries(16,30);
   $this->grid['B'] = $this-> generateColumnWithBoundaries(31,45);
   $this->grid['B'] = $this-> generateColumnWithBoundaries(46,60);
   $this->grid['B'] = $this-> generateColumnWithBoundaries(61,75);
    return new Card($this->grid);
 }

 #genera columnas que contiene los numeros
 public function generateColumnWithBoundaries($min, $max)
 {
   $column =[];

   while(sizeof($column) < 5){
      $number = rand($min, $max);
      if (!in_array($number, $column)){
         $column[] = $number;
      }
   }
   return $column;
 }



}

?>
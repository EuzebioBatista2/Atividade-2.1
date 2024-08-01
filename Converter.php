<?php

class Converter
{
  private $romanList = [
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000,
  ];

  private $intList = [
    1000 => "M",
    900 => "CM",
    500 => "D",
    400 => "CD",
    100 => "C",
    90 => "XC",
    50 => "L",
    40 => "XL",
    10 => "X",
    9 => "IX",
    5 => "V",
    4 => "IV",
    1 => "I"
  ];

  public function romanToInt($roman)
  {
    $result = 0;
    $previos = 0;

    for ($i = strlen($roman) - 1; $i >= 0; $i--) {
      if (isset($this->romanList[$roman[$i]])) {
        $current = $this->romanList[$roman[$i]];

        if ($current < $previos) {
          $result -= $current;
        } else {
          $result += $current;
        }

        $previos = $current;
      }
    }


    return $result;
  }

  public function intToRoman($num)
  {
    $result = "";

    while ($num > 0) {
      foreach ($this->intList as $value => $roman) {
        if ($num >= $value) {
          $num -= $value;
          $result .= $roman;
          break;
        }
      }
    }


    return $result;
  }
}

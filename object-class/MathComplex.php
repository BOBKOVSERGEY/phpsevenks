<?php

class MathComplex
{
  public $re, $im;

  public function add($re, $im)
  {
    $this->re += $re;
    $this->im += $im;
  }
}

$math = new MathComplex();
$math->add(10,10);
echo $math->re;

$obj = new MathComplex();
$obj->re = 6;
$obj->im = 101;

echo $obj->re;
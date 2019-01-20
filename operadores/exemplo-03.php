<?php

$a = 35;
$b = 45;
var_dump($a <=> $b);
//se a for maior, retorna 1,
//se a for igual a b, retorna 0,
//se a for menor, retorna -1

$a = NULL;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c;

echo "<br>";
echo "<br>";

//INCREMENTAIS E DECREMENTAIS


$a = 10;
echo $a++;

echo "<br>";

echo $a;

echo "<br>";

echo ++$a;

echo "<br>";

echo - -$a;












?>
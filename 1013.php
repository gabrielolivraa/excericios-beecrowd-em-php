<?php

$input = intval(fgets(STDIN));
$lines = explode(' ', $input);

$a = (float) array_shift($lines);
$b = (float) array_shift($lines);
$c = (float) array_shift($lines);

$MaiorAB = ($a + $b + abs($a - $b)) / 2;
$Maior = ($MaiorAB + $c + abs($MaiorAB - $c)) / 2;

echo $Maior . " eh o maior";

?>

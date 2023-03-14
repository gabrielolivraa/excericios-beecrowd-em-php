<?php

$input = intval(fgets(STDIN));
$lines = explode("\n", $input);

// 100, 50, 20, 10, 5, 2 e 1

$valor = (int) array_shift($lines);

$cem = (int) ($valor / 100);
$troco = $valor % 100;
$cinquenta = (int) ($troco / 50);
$troco = $troco % 50;
$vinte = (int) ($troco / 20);
$troco = $troco % 20;
$dez = (int) ($troco / 10);
$troco = $troco % 10;
$cinco = (int) ($troco / 5);
$troco = $troco % 5;
$dois = (int) ($troco / 2);
$troco = $troco % 2;
$um = (int) ($troco / 1);
$troco = $troco % 1;


echo $valor . "\n";
echo $cem . " nota(s) de R$ 100,00\n";
echo $cinquenta . " nota(s) de R$ 50,00\n";
echo $vinte . " nota(s) de R$ 20,00\n";
echo $dez . " nota(s) de R$ 10,00\n";
echo $cinco . " nota(s) de R$ 5,00\n";
echo $dois . " nota(s) de R$ 2,00\n";
echo $um . " nota(s) de R$ 1,00\n";

?>

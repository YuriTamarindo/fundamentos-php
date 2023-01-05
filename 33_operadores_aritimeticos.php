<?php

$a = 2;
$b = 3;

$result = $a + $b;
echo "O resultado da soma entre {$a} e {$b} é igual a {$result}<br>";

$result = $a - $b;
echo "O resultado da subtração entre {$a} e {$b} é igual a {$result}<br>";

$result = $a * $b;
echo "O resultado da multiplicação entre {$a} e {$b} é igual a {$result}<br>";

$result = $a / $b;
echo "O resultado da divisão entre {$a} e {$b} é igual a {$result}<br>";

$result = $a % $b;
echo "O resultado do resto da divisão entre {$a} e {$b} é igual a {$result}<br>";


if($b % 2 == 0)
    echo "Par";
else
    echo "impar";

echo "<br>";

$result = (2 + (2 - 8) / 4) * 2;

echo $result;
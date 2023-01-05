<?php

$a = 2;
$b = 2;

$a++;
echo "{$a}<br><hr>";

$a--;
echo "{$a}<br><hr>";

//pré incremento
echo $a + ++$b;
echo "<br><hr>";
//pós incremento
echo $a + $b++;
echo "<br><hr>";
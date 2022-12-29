<?php

$state = 'São Paulo/SP/Brasil/Terra';
$arrayState = explode('/',$state); //O explode transforma uma string em um array , a barra que está entre aspas é para identificar até onde é o array
var_dump($arrayState[1]);
echo '<hr>';
var_dump($arrayState[2]);
echo '<hr>';
var_dump($arrayState);
echo '<hr>';
//----------------------------------------

$lolo = [1,2,3,4,5,6,7,8,9,10];
print_r($lolo);
echo '<hr>';
$outra = implode(' - ', $lolo);
echo $outra;
//o implode trabsforma um array em uma string

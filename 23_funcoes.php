<?php

$taxa = 3;

function soma(int $n1,int $n2):array
{
    global $taxa;// para utilizar uma variável fora do escopo da função é preciso utilizar o global
    $teste = 10;
    $salvo = ($n1 + $n2) * $taxa;
    return [$teste, $salvo]; //quando for necessário retornar mais de um valor em uma função, é preciso criar um array
}

$result = soma(1,2);
var_dump($result);//vardump foi utilizado porquê a função retorna um array

<?php

    function pt($value)
    {
        echo "{$value}<hr>";
    }

    $teste = 10;
    pt('algo');
    pt($teste);

//---------------------------------------

    function soma(int $n1, int $n2): int
    {
        return $n1 + $n2;
    }

    $n_aleatorio1 = 2;
    $n_aleatorio2 = 3;
    echo soma($n_aleatorio1, $n_aleatorio2);
    echo '<hr>';
    echo soma(7,8);
    echo '<hr>';
//------------------------------------- função com parâmetro opcional

    function soma2(int $n3, int $n4, int $taxa = 10): int
    { 
        return ($n3 + $n4)/$taxa ;
    }

echo soma2(5,5);
echo '<hr>';
echo soma2(6,6, 2);
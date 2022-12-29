<?php
    $var1 = 'Algo'; 
    $var2 = 'Outro';

    echo $var1.$var2;
    echo '<hr>';
    echo $var1.' '.$var2;
    echo '<hr>';

    $name1 = 'Yuri';
    $name2 = 'Icaro';

    echo 'O senhor '.$name1.' tem uma empresa com '.$name2;//não usar, mas isso é concateção, serve para unir variaveis e outros itens utilizando o ponto.
    echo '<hr>';
    echo "O senhor ${$name1} tem uma empresa com {$name2}";//forma correta, concatenar utilizando chaves para evitar situações em que utiize por "exemplo R$97,00"-> isso pode ser entendido como uma variavel
<?php

    $cart = ['Arroz', 'Sabão', 'Feijão', 'Ralinhas'];
    var_dump($cart); //IMPRIMINDO ARRAY COMPLETO
    echo '<hr>';

    array_pop($cart); //ESSA FUNÇÃO REMOVE O ULTIMO ELEMENTO DO ARRAY
    var_dump($cart);
    echo '<hr>';

    array_shift($cart); //ESSA FUNÇÃO REMOVE O PRIMEIRO ELEMENTO DO ARRAY
    var_dump($cart);
    echo '<hr>';

    unset($cart[1]); //ESSA FUNÇÃO REMOVE O ELEMENTO DO ARRAY NA POSIÇÃO INDICADA
    var_dump($cart);
    echo '<hr>';

    array_push($cart, 'Tapete'); //ESSA FUNÇÃO ADICIONA UM ELEMENTO AO ARRAY
    array_push($cart, 'Bolsa');
    var_dump($cart);
    echo '<hr>';

    array_unshift($cart, 'Microondas');//INCLUI UM ELEMENTO NO INICIO DO ARRAY
    array_unshift($cart, 'Tapete');
    var_dump($cart);
    echo '<hr>';

    $cart = array_unique($cart);
    var_dump($cart);
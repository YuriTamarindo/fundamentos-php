<?php
    $cart = [
        01 => 'Macarrão',
        02 => 'Feijão',
        03 => 'Arroz',
        04 => 'Batata'
    ];
    echo '<pre>';
    echo '<hr>';

    arsort($cart);//esse comando organiza o array em ordem alfabetica ao contrário.
    var_dump($cart);
    
    echo '<hr>';


    echo '<hr>';

    asort($cart);
    var_dump($cart);//esse comando organiza o array em ordem alfabetica.
   
    echo '<hr>';

    echo '<hr>';

    sort($cart);
    var_dump($cart);//esse comando organiza o array em ordem alfabetica e também organiza a chave do array.
    
    echo '<hr>';
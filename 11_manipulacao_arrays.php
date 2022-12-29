<?php
    $ages = [12, 14, 18, 20, 44, 50, 98, 78, 56, 90];
    
    echo '<hr>';
    
    //echo $ages[count($ages) - 1];
    //echo end($ages);

    echo '<hr>';


    echo '<hr>';

    /*$variavel = array_filter($ages, function($age){
        return $age >=18;
    });
    var_dump($variavel);*/

    $name = ['Carlos', 'Nocontrole', 'Company'];
    //$name[0] = strtoupper($name[0]);
    //$name[1] = strtoupper($name[1]);
    //$name[2] = strtoupper($name[2]);
    //var_dump($name);

    echo '<hr>';

    /*$name = array_map(function($name){
          return strtoupper($name);
    }, $name);
    var_dump($name);*/

    $name = array_map('applyToupper', $name);
    function applyToupper($valule){
        return strtoupper($valule);
    };
    var_dump($name);
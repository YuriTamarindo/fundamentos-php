<?php
    $names = ['a', 'b', 'c', 'd', 'e' , 'f', 'g'];
    /*foreach($names as $name){
        echo $name;
    }*/
    foreach($names as $keys => $name){
        echo "{$keys} => {$name} <br>";
    }
<?php

    $domain = 'www.especializati.com.br';
    echo ($domain);
    echo '<hr>';
    echo str_replace('www.','https://www.' ,$domain);//substitui uma informação de uma string por outra.
    echo '<hr>';
    echo substr($domain,0, 4);//essa função retorna os caracteres da string na posíção solicitada.
    echo '<hr>';
    echo substr($domain, -7);
    echo '<hr>';
    

    $protocolo = substr($domain, 0, 7);
    if($protocolo == 'https')
        echo 'É seguro!';
    else
        echo 'Não é seguro!';
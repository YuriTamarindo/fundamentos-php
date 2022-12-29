<?php
$name = 'Yuri';
if(isset($name))//isset verifica se a variavel existe ou não
    echo $name;
else
    echo 'Não existe';

echo '<hr>';

unset($name);//apaga a variavel

if(isset($name))
    echo $name;
else
    echo 'Não existe';

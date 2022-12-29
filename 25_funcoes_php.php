<?php

$name = 'especializaTi - Um curso da hora';

echo strtoupper($name);
echo '<hr>';
echo strtolower($name);
echo '<hr>';
echo ucfirst($name);
echo '<hr>';
echo ucfirst(strtolower($name));//essa linha utiliza o strtolower para deixar todas as letras em minusculo e em seguida deixa a primeira letra maiúscula
echo ucwords(strtolower($name));//deixa tudo minusculo e a cada back space torna a primeira letra maiuscula
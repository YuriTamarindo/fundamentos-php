<?php
date_default_timezone_set('America/Sao_Paulo');//define qual a localidade do fusorario 

echo 'O ano atual é: ' . date('Y') . '<br>';//mostra o ano com pleto com 'Y', mostra apenas o ano com 'y'
echo 'O mes atual é: ' . date('m') . '<br>';//mostra o mês atual
echo 'O dia atual é: ' . date('d') . '<br>';//mostra o dia atual
echo 'A data atual é: ' . date('d/m/Y') . '<br>';//pode ser colocado também dessa forma e pode ser adicionado barra ou ponto ou traço para imporpir formatado
echo 'Hora atual é: ' . date('H') . '<br>';//mostra a hora
echo 'O Minuto atual é: ' . date('i') . '<br>';//mostra os minutos 
echo 'O segundo atual é: ' . date('s') . '<br>';// mostra os segundos
echo 'Hora completa atual - ' . date('H:i:s') . '<br>';//mostra a hora completa
echo 'Timezone: ' . date_default_timezone_get() . '<br>';//referente a zona do horário. Ex: america, japão, asia. 
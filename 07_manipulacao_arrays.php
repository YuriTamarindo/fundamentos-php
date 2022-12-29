<?php

//$nome = array('Carlos', 'NoControlle', 'Company');
//$nome = ['Carlos', 'NoControlle', 'Company'];
$name = 'Carlos';
$company = 'NoControlle';
$year = 2018;

/*
$infoCompany = [
    $nome,
    $company,
    $year
];
*/
$infoCompany = compact('name', 'company', 'year');
//echo json_encode($infoCompany);
//var_dump(is_array($name)); --->> a função 'is_array verifica se a função é um array ou não e me retorna falso ou verdadeiro
//var_dump(in_array('Carlos', $infoCompany)); --->> a função 'in_array' verifica se a palavra existe dentro do array informado
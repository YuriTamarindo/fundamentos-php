<?php

//$salt = 'solKsaK#amKKDGDssf';
//$password = '123456'. $salt;

//echo md5($password); // 32 caracteres
//echo sha1($password); //gera com 40 caracteres
//echo crypt($password, $salt);//esse além de criptografar pede uma palavra de segurança
//$passCr = base64_encode($password);
//echo $passCr;
//echo base64_decode($passCr);
//echo hash('sha512', $password);

$password = '123456';
function cryptC(string $value): string
{
    $value = 'solKsaK#amKKDGDssf'.$value;
    $hash = md5($value);
    $hash = sha1($hash);
    $hash = hash('sha512', $hash);

    return $hash;
}

echo cryptC($password);
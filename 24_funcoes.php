<?php

// 4=>4*3*2*1 = 24
// 2=>2*1 = 2
// 3=>3*2*1 = 6
function fat(int $number):int
{
    if($number<=1)
        $number=$number;
    else
        $number = $number * fat($number-1);

    return $number;
}
echo fat(2);

//eu não entendi essa função fatorial.
//existe outra forma de fazer, então não é preocupante
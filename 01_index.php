<?php
    //$cars = array(1, 'Yuri', 12.2);
    //var_dump($cars[1]);
    //$cars = ['Uno', 'Gol', 'Fusion', 'Civic'];
    //var_dump($cars[3]);
    /*$car = [
        'cor' => 'braco',
        'portas'=> '4',
        'ano' => '2018',
    ];
    $car['airbag'] = true;
    $car['som'] = false;
    if($car['airbag']){
        echo "o carro tem um som";
    }*/
    $cars = [
        'Mercedes' => [
            'color' => 'black',
            'motor' => '5.2',
            'name' => 'Nome do carro da mercedes'
        ],
        'Ford' => [
            'color' => 'Yellow',
            'motor' => '3.0',
            'name' => 'Ford Ka'
        ],
        'Ferrari' => [
            'cor' => 'verde cana',
            'motor' => 'v8',
            'name' => 'Lamborguinni'
        ],
        
        
        ];

    echo json_encode($cars);
    
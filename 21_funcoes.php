<?php
    function testFunction()
    {
        echo 'Sou uma função <br>';
    }

testFunction(); //essa linha faz a chamada da função


//-------------------------------------------------------------
    function testFunctio()
    {
        return 'Sou uma função <br>';
    }

echo testFunctio(); //é mais correto fazer dessa forma

//-------------------------------------------------------------
    function testFuncti(): string
    {
        return 'Sou uma função <br>';//é mais correto fazer dessa forma para saber que tipo de dado a função retorna
    }

echo testFuncti(); 
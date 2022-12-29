<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu site em PHP</title>
    </head>
    <body>
        <?php
            //include ('includes/header.php');//include enclui o arquivo nessa pagina
            require('includes/header.php');//o require obriga o código a ser executado nessa pagina, caso tenha algum erro no arquivo ele interrompe a execussão co código.É utilizado quando é necessário loguin a pagina.
            require_once('includes/header.php');//é mais utilizado porquê garante que esse arquivo vai ser executado apenas essa vez.
        ?>
        <div>
            <?php
                echo 'Sou conteúdo do site';
            ?>
        </div>
        <?php
            include_once('includes/footer.php');//faz com que o código seja incluido apenas uma vez, serve em casos que tenha algum laço de repetição que não precisa ser usado.
        ?>
    </body>
</html>
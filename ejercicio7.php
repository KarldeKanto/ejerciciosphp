<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $equis = "*";                       //guardar el parametro * para poder imprimirlo la veces que queramos
        for ($i = 1; $i <= 10; $i++){       //recorremos el for unas 10 veces para la piramide 
            echo $equis . "<br>";           //aqui vamos imprimiendo y saltando de linea para hacer la piramide
            $equis = $equis . "*";          //le vamos sumando * para hacer mas grande la piramide
        }


    ?>
    
</body>
</html>
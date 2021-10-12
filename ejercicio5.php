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

        $numero = 6;                            //el numero que vamos a saber si es par o impar
        $n_superior = $numero + 2;              //aqui le subamamos dos para saber cual sera su siguiente numero par o impar
        $n_superiors = $numero + 4;             //aqui le subamamos cuatro para saber cual sera el segundo numero siguiente par o impar
        $n_inferior = $numero - 2;              //y aqui le restamos dos para saber cual sera su anterior numero par o impar
        $n_inferiors = $numero - 4;             //y aqui le restamos cuatro para saber cual sera su segundo numero anteior par o impar
        

        if ($numero %2 ==0){

            echo "El  $numero  es par<br>";                                             //mostramos el numero si es par
            echo " los dos siguientes pares son  $n_superior  y $n_superiors";          //los suguientes numeros pares superiores
            echo " los dos siguientes pares son $n_inferior  y $n_inferiors";           //los anteriores numeros pares superiores

        }
        else {
            echo "El  $numero  es impar<br>";                                           //mostramos el numero si es impar
            echo " los dos siguientes impares son  $n_superior  y $n_superiors";        //los suguientes numeros impares superiores
            echo " los dos siguientes impares son $n_inferior  y $n_inferiors";         //los anteriores numeros impares superiores
        }


    ?>
    
</body>
</html>
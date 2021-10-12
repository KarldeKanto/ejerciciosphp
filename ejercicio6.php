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

        for ($i = 1; $i <=1000; $i++){              //recorremos el for
            if ($i >= 200 && $i <= 300){            //le decimos que solos nos coja del 200 al 300
                echo $i ."<br>";                    //aqui lo imprimimos por pantalla
            }
            elseif ($i > 300) {                     //y aqui decimos que cuando pase de 300 corte el bucle y salga con el break
                break;
            }
        }

    ?>
    
</body>
</html>
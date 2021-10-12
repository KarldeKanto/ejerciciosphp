<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        include 'definir_array10.php';                            //con esto incluimos los dos ficheros en uno

        $buscar = $_GET["Busca"];                               //buscarlo por parametro

        for ($i = 0; $i<count($num) -1; $i++){                  //recorremos el for, importante poner el count de num para saber cuando vueltas tiene que dar
            if($buscar == $num[$i]){                            //si es igual al parametro que hemos puesto nos dira que lo hemos encontrado
                break;                                          //si lo encuentra que pare
            }                                                   
            else {
                continue;                                       //continua para saber si esta o no
            }
        }

        if ($buscar == $num[$i]){
            echo "Encontrado";                                 //encontrado el numero                          
        }
        else {  
            echo "No encontrado";                             //numero no encontrado
        }
    ?>


</body>
</html>
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

        $tabla = 1;                                     //definir el numero de la tabla
        $p_n = 0;                                       //primer numero que aparecera en la multiplicacion
        $s_n = 1;                                       //segundo numero que aparecera en la multiplicacion

        for ($i = 1; $i <= 10; $i++){                   //recorrer el for 10 por las 10 tablas de multiplicar

            $s_n = 1;                                   //ponemos el segundo numero de la multiplicacion
            $p_n = $p_n + 1;                            //y aqui el primero que por cada vuelta se ira sumando para completar los 10
            echo "****************<br>";                
            echo "Tabla del $tabla<br>";                //imprimimos el numero de la tabla     
            echo "****************<br>";            
            for ($a = 1; $a <=10; $a++){                //recorremos el for para que imprima del 1 al 10 las multiplicaciones
                echo "$p_n x $s_n =" . $p_n * $s_n;     //imprimir multiplicaciones
                $s_n = $s_n + 1;                        //incrementar el segundo numero
                echo "<br>";                        
            
            }
            $tabla = $tabla + 1;                        //aumentar el numero de la tabla
        }
        
    ?>
</body>
</html>
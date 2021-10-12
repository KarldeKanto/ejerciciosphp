<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        $operacion = $_GET["tipo_operacion"];                                           //parametro operacion + - * / !
        $num_uno = $_GET["num1"];                                                       //primer numero
        $num_dos = $_GET["num2"];                                                       //segundo numero
        $resultado = 0;                                                                 //el resultado de la operacion


        if ($operacion == "sumar"){                                                     //comprobar si es suma
            $resultado = $num_uno + $num_dos;                                           //juntar el resultado
            echo "Suma: " . $num_uno . " + " . $num_dos . " = " . $resultado;           //mostrar el resultado
        }
        elseif($operacion == "restar"){                                                 //comprobar si es resta        
            $resultado = $num_uno - $num_dos;                                           //juntar el resultado
            echo "Resta: " . $num_uno . " - " . $num_dos . " = " . $resultado;          //mostrar el resultado
        }
        elseif($operacion == "multiplicar"){                                            //comprobar si es multiplicacion 
            $resultado = $num_uno * $num_dos;                                           //juntar el resultado
            echo "Multiplicar: " . $num_uno . " * " . $num_dos . " = " . $resultado;    //mostrar el resultado
        } 
        elseif($operacion == "dividir"){                                                //comprobar si es division 
            $resultado = $num_uno / $num_dos;                                           //juntar el resultado
            echo "Dividir: " . $num_uno . " / " . $num_dos . " = " . $resultado;        //mostrar el resultado
        }
        elseif($operacion == "factorial"){
            $fac = 1;
            for ($i = 1; $i <= $num_uno; $i++){                                         //comprobar si es factorial 
                $fac = $fac * $i;                                                       //juntar el resultado
            }
            echo "El factorial del numero" . $num_uno . $fac;                           //mostrar el resultado
        }
    ?>

</body>
</html>
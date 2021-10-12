<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        $operacion = $_GET["tipo_operacion"];                                                                               
        $num_uno = $_GET["num1"];                                                                                           
        $num_dos = $_GET["num2"];                                                                                          
        $resultado = 0;                                                                                                     

        if ($operacion == "" || $num_uno == null || $num_dos == null){                                                      //comprobar si has pasado la operacion, numero1 o numero2
            echo "te falta añadir algunos de los tres campos necesarios, revisalos";
        }
        else {                                              

            function suma($num_uno, $num_dos){                                                                              //creamos la funcion suma, pasandole dos parametros, numero1 o numero2
                
                $resultado = $num_uno + $num_dos;
                echo "Suma: " . $num_uno . " + " . $num_dos . " = " . $resultado;

            }
            function resta($num_uno, $num_dos){                                                                             //creamos la funcion resta, pasandole dos parametros, numero1 o numero2
                
                $resultado = $num_uno - $num_dos;
                echo "Resta: " . $num_uno . " - " . $num_dos . " = " . $resultado;

            }
            function multi($num_uno, $num_dos){                                                                             //creamos la funcion multi, pasandole dos parametros, numero1 o numero2
                
                $resultado = $num_uno * $num_dos;
                echo "Multiplicar: " . $num_uno . " * " . $num_dos . " = " . $resultado;

            }
            function divi($num_uno, $num_dos){                                                                              //creamos la funcion divi, pasandole dos parametros, numero1 o numero2
                
                try {                                                                                                       //aqui entra siempre y cuanto la division no sea por 0
                    $resultado = $num_uno / $num_dos;   
                    echo "Dividir: " . $num_uno . " / " . $num_dos . " = " . $resultado;
                }
                catch (DivisionByZeroError $e) {                                                                            //pones el catch para el fallo de la division por 0
                    echo $e->getMessage();
                }

            }
            function fac($num_uno){                                                                                        //creamos la funcion fac, donde solo le pasaremos el primer numero para la factorial                                       

                if ($num_uno < 0){
                    echo "Que haces metiendo un numero negativo en un factorial";
                }
                else {
                    $fac = 1;
                    for ($i = 1; $i <= $num_uno; $i++){
                        $fac = $fac * $i;
                    }
                    echo "El factorial del numero " . $num_uno . " es " . $fac;
                }

            }

            if ($operacion == "sumar"){                                                                                    //para saber si es suma
                suma($num_uno, $num_dos);
            }
            else if ($operacion == "restar"){                                                                              //para saber si es resta
                resta($num_uno, $num_dos);
            } 
            else if ($operacion == "multiplicar"){                                                                          //para saber si es multiplicacion
                multi($num_uno, $num_dos);
            } 
            else if ($operacion == "dividir"){                                                                              //para saber si es division
                divi($num_uno, $num_dos);
            } 
            else if ($operacion == "factorial"){                                                                            //para saber si es factorial
                fac($num_uno, $num_dos);
            } 

    }
    ?>

</body>
</html>
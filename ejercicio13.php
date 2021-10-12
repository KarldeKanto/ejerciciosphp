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

        function calculador($operacion, $num_uno, $num_dos){                                                                  //esto es la fucion calcular, pasamos los parametros necesarios

            if ($operacion == "" || $num_uno == null || $num_dos == null){
                echo "te falta añadir algunos de los tres campos necesarios, revisalos";
            }
            else {

                function suma($num_uno, $num_dos){
                    
                    $resultado = $num_uno + $num_dos;
                    echo "Suma: " . $num_uno . " + " . $num_dos . " = " . $resultado;

                }
                function resta($num_uno, $num_dos){
                    
                    $resultado = $num_uno - $num_dos;
                    echo "Resta: " . $num_uno . " - " . $num_dos . " = " . $resultado;

                }
                function multi($num_uno, $num_dos){
                    
                    $resultado = $num_uno * $num_dos;
                    echo "Multiplicar: " . $num_uno . " * " . $num_dos . " = " . $resultado;

                }
                function divi($num_uno, $num_dos){                                                                              
                    try {
                        $resultado = $num_uno / $num_dos;                                               
                        echo "Dividir: " . $num_uno . " / " . $num_dos . " = " . $resultado;
                    }
                    catch (DivisionByZeroError $e) { 
                        echo $e->getMessage();
                    }
                }
                function fac($num_uno){
                    
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

                if ($operacion == "sumar"){
                    suma($num_uno, $num_dos);
                }
                else if ($operacion == "restar"){
                    resta($num_uno, $num_dos);
                } 
                else if ($operacion == "multiplicar"){
                    multi($num_uno, $num_dos);
                } 
                else if ($operacion == "dividir"){
                    divi($num_uno, $num_dos);
                } 
                else if ($operacion == "factorial"){
                    fac($num_uno, $num_dos);
                } 

        }
    }
    calculador($operacion, $num_uno, $num_dos);                                                                               //llamamos a la funcion con los parametros
    ?>

</body>
</html>
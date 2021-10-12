<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php

        $fecha = $_GET['fecha'];                                                                //pasarle los parametros
        $fechados = $_GET['fecha2'];                                        

        $fechacambiada = date("d/m/Y", strtotime($fecha));                                      //cambiar el formato fecha

        echo $fechacambiada;                                    

        echo "<br><br>";

        $fechacambiadados = date("l j \d\\e F \d\\e Y", strtotime($fechados));                  //poner el dia en letra y demas

        echo $fechacambiadados;

        echo "<br><br>";
        
        if ($fecha < $fechados){                                                                //comparamos fechas
            echo "La fecha 1 es más antigua que la fecha 2";
        }
        else{
           echo "La fecha 2 es más antigua que la fecha 1";
        }

        echo "<br><br>";

        echo "Fecha 1 sumándole un mes:" . date("d/m/Y",strtotime($fecha . "+ 1 month"));       //sumarle un mes a la fecha 1

        echo "<br><br>";

        if ($fecha < $fechados){                                                                //comparar otra vez la fecha
            echo "La fecha 1 es más antigua que la fecha 2";
        }
        else{
           echo "La fecha 2 es más antigua que la fecha 1";
        }
    ?>

</body>
</html>
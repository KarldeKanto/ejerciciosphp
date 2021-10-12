<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $convertir = file_get_contents("definir_json17.json");                                              //convierte el texto en una cadena
        $transformar = json_decode($convertir, true);                                                       //convierte un string codificado en json a una variable de php
        $fecha_hoy = date("Y");
        $lista_junior = array();
        $lista_master = array();
        $lista_senior = array();

        foreach($transformar as $i){
            $fecha_hoy = date("Y");
            $fechas = date("Y", strtotime($i["fecha"]));
            $fecha_hoy = $fecha_hoy - $fechas;
            if ($fecha_hoy <= 20){
                array_push($lista_junior, $i['nombre']);
            }
            else if ($fecha_hoy > 20 && $fecha_hoy <= 40){
                array_push($lista_master, $i['nombre']);
            }
            else if ($fecha_hoy > 40){
                array_push($lista_senior, $i['nombre']);
            }
        }

        echo "<table border='1px solid black'>";
        echo "<tr>";
        echo "<td>";
        echo "Juniors";
        echo "</td>";
        echo "<td>";
        echo "Masters";
        echo "</td>";
        echo "<td>";
        echo "Seniors";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        foreach ($lista_junior as $z){
            echo $z . "<br>";
        }
        echo "</td>";
        echo "<td>";
        foreach ($lista_master as $x){
            echo $x . "<br>";
        }
        echo "</td>";
        echo "<td>";
        foreach ($lista_senior as $c){
            echo $c . "<br>";
        }
        echo "</td>";
        echo "</tr>";
        echo "</table>";

    ?>

</body>
</html>
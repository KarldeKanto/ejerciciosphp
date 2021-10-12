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

        $frase = $_GET["frase"];                                                                            
        $frase_array = str_split($frase);                                               //convierte el texto en un array
        $frase_array_dos = explode(" ", $frase);                                        //meter en una array con la separacion de los espacios                   
        $guardar_letras = array();                              
        $guardar_numeros = array();
        $numeros_repe = array();
        $letras_tres = array();
        $guardar_dos_letras = array();
        $contador_dos_letras = 0;                                                       //contador de las palabras con dos letras

        foreach ($frase_array as $i) {
            if (is_numeric($i)){                                                        //para saber si es numerico
                array_push($guardar_numeros, $i);                                       //meter los numeros en una lista
            }
            else if (is_string($i)){                                                    //para saber si es string
                array_push($guardar_letras, $i);                                        //meter las letras en una lista
            }
        }

        $contarnum = array_count_values($guardar_numeros);                              //te devuelve el numero de veces que aparece un caracter

        $veces_aparecer = $contarnum;                                                   //la guardamos en otra variable para usarla despues                                     
        
        $guardar_numeros = array_unique($guardar_numeros);                              //crear un array sin valores repetidos

        foreach ($frase_array_dos as $in){
            if (is_numeric($in)){                                                       //para que no me guarde numeros en las frases con dos letras
                continue;
            }
            else if (is_string($in)){
                array_push($guardar_dos_letras, $in);                                   //guardar la frase sin numeros
            }
        }

        foreach($guardar_dos_letras as $pe){                                            
            if (strlen($pe) == 2){                                                      //comprobar la longitud de las palabras, tiene que ser igual a 2, queriendo decir que es una frase con dos letras
               $contador_dos_letras += 1;                                               //contador de las palabras con dos letras
            }
        }
        
        $contarletras = array_count_values($guardar_letras);                            //cuenta todos los valores de la array

        $guardar_letras = array_unique($guardar_letras);                                //mostrar la array sin los valores duplicados

        foreach($guardar_letras as $q){     
            if ($contarletras[$q] > 3){                                                 //comprueba si las letras se repiten mas de 3 veces
                array_push($letras_tres, $q);                                           //guardarmos las letras repetidas mas de 3 veces
            };
        };

        echo "<table border='1px solid black'>";
        echo "<tr>";
        echo "<td>Todas las letras repetidas mas de 3 veces</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
            foreach($letras_tres as $b){
                echo $b . " ";
            }
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>numeros que se repiten</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
            foreach($guardar_numeros as $g){
                echo $g . " se repite: " . $veces_aparecer[$g] . "<br>";
            }
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Numero de veces que aparece una frase con dos letras</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo $contador_dos_letras;
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    ?>
    
</body>
</html>
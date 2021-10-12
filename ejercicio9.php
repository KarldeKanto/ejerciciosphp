<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        for ($i=1; $i<=100; $i++) {                         //recorrer el for del 1 al 100
            if (primo($i)) {                                //comprobar con la condicion if para ver si es primo o no (llamando a la funcion)
                    echo $i ."<br>";                        //imprimir el numero primo
            } else {
                continue;                                   //el continue para dejar seguir
            }
        }
        
        function primo($n)                                  //la funcion primo que le pasamos el parametro n para comprobar si es primo o no
        {
            if ($n == 2 || $n == 3 || $n == 5 || $n == 7) { //si el numero son iguales a 2,3,5,7, eso significa que es primo
                return True;                                
            } else {                                    
                                                                   
                if ($n % 2 != 0) {                          // comprobamos si no da el resto de 0
                                                            
                    for ($y = 3; $y <= sqrt($n); $y += 2) { //aqui comprobando si son primos o no
                        if ($n % $y == 0) {                 //y aqui entran los que no son primos
                            return False;
                        }
                    }
                    return True;
                }
            }
            return False;
        }
    ?>

</body>
</html>
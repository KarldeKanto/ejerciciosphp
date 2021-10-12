<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        #p {

            color:red;              /* Aqui cambiamos el estilo del parrafo*/
            font-weight:bold;
            text-align:center;
        }

    </style>
</head>
<body>

    <?php

        $hola = "hola ";                            //guardar la variable hola
        $nombre = $_GET["nombre"];                  //y le pasamos por parametro el nombre
        echo "<h1>" . $hola . $nombre . "</h1>";    //y aqui montamos el h1
        echo "<p id='p'>¿Como estas?</p>";          //y aqui montamos el parafo

    ?>
    
</body>
</html>
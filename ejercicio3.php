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
        $nombre = $_GET["nombre"]; //esto guarda la variable que le pasaremos por parametro
        echo "hola " . $nombre;     //esto muestra el "hola" con la variable que le hemos pasado
    ?>
    
</body>
</html>
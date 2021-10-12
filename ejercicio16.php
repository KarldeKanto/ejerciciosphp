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
  
        $texto = "29,35,83,98,38,32,95,59,54,65,50,11,13,1,10,84,20,3,65,62";
        $lista = array($texto);                                                                                 //guardardamos en una array
        $textodos = "29,35,83,98,38,32,95,59,54,65,50,11,13,1,10,84,20,3,65,62";                                
        $listaa = explode(",", $textodos);                                                                      //los separa por "," convirtiendose en array 

        class Ordenar{
            
            public $ordenlista  = array(); 

            function ordenarnumeros($listaa){   
                                    
                array_multisort($listaa);  

                $this->ordenlista = $listaa;                                                                //hace referencia que el this a una variable dentro de esta misma clase
                
            }

            function numerosaletorios($listaa){
                
                for($x = 0; $x < 10; $x++){
                    array_push($listaa, rand(1,100));
                }
                $this->ordenlista = $listaa;
            }

            function imprimirnumeros($listaa){   
                                            
                foreach($listaa as $i){
                    echo $i . ",";
                }
                echo "<br><br>";
            }
        }

        $orden = new Ordenar();                                                                                 //creamos el objeto
        $orden->imprimirnumeros($listaa);                                                                       //el objeto llama a la funcion
        $orden->ordenarnumeros($listaa);
        $orden->imprimirnumeros($orden->ordenlista);
        $orden->numerosaletorios($orden->ordenlista);
        $orden->imprimirnumeros($orden->ordenlista);                                                            //el objeto llama a la funcion pasandole la variable que tenemos dentro de esa clase
        $orden->ordenarnumeros($orden->ordenlista);
        $orden->imprimirnumeros($orden->ordenlista);

    ?>
    
</body>
</html>
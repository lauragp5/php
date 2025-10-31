<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <!--Formulario-->
    <form action="" method= "POST">
        <input type="number" name="n0" min="1" max="20">
        <input type="number" name="n1" min="1" max="20"><br>
        <input type="number" name="n2" min="1" max="20">
        <input type="number" name="n3" min="1" max="20"><br>
        <input type="number" name="n4" min="1" max="20">
        <input type="number" name="n5" min="1" max="20"><br>

        <input type="submit" value="ENVIAR"><br>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $apUsuario = [];
            for ($i=0; $i < 6; $i++) { 
                $apUsuario[$i] = $_POST["n$i"];
            }

            print_r($apUsuario);
            sort($apUsuario);
            print_r($apUsuario);

            //creo variables para mi while
            $esta = false;
            $cont = 0;

            while(!$esta || $cont < 6){
                for ($i=0; $i < 6; $i++) { 
                    if($cont != $i){
                        if($apUsuario[$cont] == $apUsuario[$i]){
                            $esta == true;
                            echo "repite tu apuesta";
                        }
                    }
                }
                $cont++;
            }

            if(!$esta){
                $final = [];

                for ($i=0; $i < 6; $i++) { 
                    $repetido = false;
                    $cont2 = 0;
                    //Me he quedado por aquí comprobando que rellena correctamente el array
                        do{
                            $final[$i] = rand(1, 20);
                            if($final[i] == $final[$cont2]){
                                $repetido = true;
                            }
                        }while($repetido);
                     
                        $cont2++;
                    }
                    
                }
            }

        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
    ?>
</head>
<body>

    <form action="" method= "POST">
        <label for="tabla">Tabla del: </label>
        <input type="number" name="tabla1"><br>

        <input type="submit" value="ENVIAR"><br>
    </form>
    <form action="" method= "GET">
        <label for="tabla">Tabla del: </label>
        <input type="number" name="tabla2"><br>

        <input type="submit" value="ENVIAR"><br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $tabla = $_GET["tabla2"];
            for ($i=1; $i <= $tabla; $i++) { 
                for ($j=0; $j <= 10 ; $j++) {
                $res = $i * $j; 
                echo ("$i x $j = $res <br>");
                }
            }
        } elseif($_SERVER["REQUEST_METHOD"] == "POST"){
            print_r($_SERVER);
            $tabla = $_POST["tabla1"];
            for ($i=1; $i <= $tabla; $i++) { 
                for ($j=0; $j <= 10 ; $j++) {
                $res = $i * $j; 
                echo ("$i * $j => $res <br>");
                }
            }
        }


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de dados</title>
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
    ?>
</head>
<body>
<form method="POST"><input type="submit" value="OK"><br></form>    



<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo(jugarDados());
}
function jugarDados(){
    $sigue = true; //si pierde o gana es false
    $contador = 1;
    $res = "";
    $punto ="";

    $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
        $suma = $dado1 + $dado2;

        $res .= "Tirada $contador: <hr>";
        $res .= "Dado 1: $dado1 <br>";
        $res .= "Dado 2: $dado2 <br>";
        $res .= "Total: $suma <br>";
        if($suma == 7 || $suma == 11){
            $res .= "VICTORIA <hr> <hr>";
            $sigue = false;
        }

        elseif($suma == 2 || $suma == 3 || $suma == 12){
            $res .= "DERROTA <hr> <hr>";
            $sigue = false;
        }

        else{
            $punto = $suma;
            $res .= "Punto:  $punto <hr>";
        }
        $contador++;

    while ($sigue){
        
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
        $suma = $dado1 + $dado2;

        $res .= "Tirada $contador: <hr>";
        $res .= "Dado 1: $dado1 <br>";
        $res .= "Dado 2: $dado2 <br>";
        $res .= "Total: $suma <br>";

        if ($suma == $punto) {
            $res .= "VICTORIA <hr> <hr>";
            $sigue = false;
        }
        elseif($suma == 7){
            $res .= "DERROTA <hr> <hr>";
            $sigue = false;
        }
        else{
            $res .= "Punto: $punto <hr> <hr>";
        }
        $contador++;
    }
    return($res);
}
    

?>
</body>
</html>
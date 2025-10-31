<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios for</title>
</head>
<body>
    <?php
    /*
    echo "<pre>";
    for($i = 1 ; $i <= 10; $i++){

        for($j = 0 ; $j <= $i ; $j++){
            echo "  ";
            if($j == $i){
                echo $j."<br>";
            }
            }


    }


    echo "</pre>";

    //ejercicio 1
    for($i = 1 ; $i <= 100 ; $i++){
        if($i % 2 == 0){
            echo $i. "<br>";
        }
    }

    //ejercicio 2
    $num = 2;
    for($i = 0 ; $i <= 10; $i++){
        echo "0 * $num =" .$num * $i;
    }

*/


    //ejercicio pizarra hacer un cuadrado con asteriscos
     echo "<pre>";
    function cuadradoHueco($num){
        $cuadrado = "";

        for($i = 0; $i < $num; $i++){
            for($j = 0; $j < $num; $j++){
                if($i == 0 || $i == $num-1|| $j == 0 || $j == $num-1){
                    $cuadrado .= "*";
                }
                else{
                    $cuadrado .= " ";
                }
            }
            $cuadrado .= "<br>";
        }
        return $cuadrado;
    }

    function matrizAsteriscos($num){
        $matriz = "";
        for($i = 0; $i < $num; $i++){
            for($j = 0; $j < $num; $j++){
                if($i == $j){
                    $matriz .= "* ";
                }
                elseif(($i + $j)%2 == 0){
                    $matriz .= "+ " ;
                }
                else{
                    $matriz .= "- ";
                }
            }
            $matriz .= "<br>";
        }
        return $matriz;
    }

    function divisor($num){
        $matriz = "";
        for($i = 0; $i < $num; $i++){
            for($j = 0; $j < $num; $j++){
                if($num/2 == $i && $num/2 == $j && $num%2 != 0){
                    $matriz .= "X";
                }

                if($i == $j){
                    $matriz .= "\\";
                }
                elseif(($i + $j) == $num -1){
                    $matriz .= "/" ;
                }
                else{
                    $matriz .= " ";
                }
            }
            $matriz .= "<br>";
        }
        return $matriz;
    }

    echo(divisor(15));

    function divisorLleno($num){
        $matriz = "";
        for($i = 0; $i < $num; $i++){
            for($j = 0; $j < $num; $j++){
                if($i == $j && (($i + $j) == $num -1)){
                    $matriz .= "X";
                }
                elseif($i == $j){
                    $matriz .= "\\";
                }
                elseif(($i + $j) == $num -1){
                    $matriz .= "/" ;
                }
                elseif((($i + $j) < $num -1) && $j > $i ){
                    $matriz .= "+" ;
                }
                elseif((($i + $j) > $num -1) && $j < $i ){
                    $matriz .= "-" ;
                }
                
                elseif($j < $num/2 && (($i + $j) < $num -1)){
                    $matriz .= "*";
                }
                
                elseif($j > $num/2){
                    $matriz .= "%";
                }
                else{
                    $matriz .= " ";
                }
            }
            $matriz .= "<br>";
        }
        return $matriz;
    }
    echo(divisorLleno(15));
    echo "</pre>";

    ?>
</body>
</html>
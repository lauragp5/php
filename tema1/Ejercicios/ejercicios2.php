<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio operaciones</title>
</head>
<body>
    <?php
    function operaciones ($var1, $var2){
        $suma = $var1 + $var2;
        $mult = $var1 * $var2;
        $res = "La suma de $var1 y $var2 es = $suma <br>";
        $res .= "La multiplicación de $var1 y $var2 es = $mult <br>";

        

        if($var1 > $var2){
           $resta = $var1 - $var2;
            $res .= "La resta de $var1 y $var2 es $resta <br>";
            if($var1 != $var2){
                $div = $var1 / $var2;
                $mod = $var1 % $var2;
                $res .= "La división de $var1 y $var2 es = $div <br>";
                $res .= "El modulo de $var1 y $var2 es = $mod <br>";
            }

            else{ 
                $res .= "Los números son iguales";
            }

        }

        else{
            $resta = $var2 - $var1;
            $res .= "La resta de $var2 y $var1 es $resta <br>";
            if($var1 != $var2){
                $div = $var2 / $var1;
                $mod = $var2 % $var1;
                $res .= "La división de $var2 y $var1 es = $div <br>";
                $res .= "El modulo de $var2 y $var1  es = $mod <br>";
            }

            else{ 
                $res .= "Los números son iguales";
            }
        }
        return $res;
        
    }

    echo operaciones(rand(1,10), rand(1,10)); 
    ?>
</body>
</html>
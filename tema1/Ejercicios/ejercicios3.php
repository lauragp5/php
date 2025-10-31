<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de clase 3</title>
</head>
<body>
    <?php
    /*
        //Ejercicio 1
        function esMayor ($num1, $num2){
            /* Ejercicio con if
            if ($num1 > $num2){
                echo "El número $num1 es mayor que $num2";
            }
            elseif($num1 == $num2){
                echo "Los números ($num1) son iguales";
            }
            else{
                echo "El número $num2 es mayor que $num1";
            } 

            switch(true){
                case ($num1 > $num2):
                    echo "El número $num1 es mayor que $num2";
                    break;
                case($num1 == $num2):
                    echo "Los números ($num1) son iguales";
                    break;
                default:
                    echo "El número $num1 es menor que $num2";
                
            }

        } 

        //Ejercicio 2
        function esPar ($num1){
            if ($num1 == 0){
                echo "El número es cero";
            }
            elseif($num1%2 == 0){
                echo "El número $num1 es par";
            }
            else{
                echo "El $num1 es impar";
            }


        }

        //Ejercicio 3
        function enRango($num, $min, $max){
            echo "El número es $num, el mínimo es $min, el máximo es $max <br>";

            //Compruebo que el máximo sea mayor que el mínimo
            if($max > $min){
                //Compruebo que el número esté en el rango
                if($num <= $max && $num >= $min){
                    //Calculo la media del máximo y el mínimo
                    $media = ($max + $min) / 2;

                    //compruebo si el número está por debajo o encima de la media
                    if($num > $media){
                        //compruebo si coincide con el max
                        if($num == $max){
                            echo "$num coincide con el número mayor $max";
                        }

                        else{
                            echo "$num está en la mitad más alta del rango de $max y $min";
                        }
                    }

                    elseif ($num < $media){
                        //compruebo si coincide con el min
                        if($num == $min){
                            echo "$num coincide con el número menor $min";
                        }

                        else{
                            echo "$num está en la mitad más alta del rango de $min y $max";
                        }
                    }
                    else{
                        echo "$num está justo en la media de $max y $min";
                    }
                }
                else {
                    echo "El número no está en el rango";
                }        
            }
            else{
                echo "$max no es mayor que $min";
            }
            
        }

        function multiplo ($a, $b){
            if($a < $b){
                $otro = $a;
                $a = $b;
                $b = $otro; 
            }
            if ($a % $b == 0){
                    echo "$a es múltiplo de $b";
                }
                else {
                    echo "$a NO es múltiplo de $b";
                }

        }


        /*
        ESTRUCTURA DEL MATCH
        $resultado = match ($numero1) {
            1 => "Se ha escogido el primer número",
            2 => "se ha escogido el segundo número",
            3 => "Se ha escogido el tercer número"
        };
        

        $dia = "lunes";
        $clases = match($dia){
            "lunes" => "No hay servidor",
            "martes" => "no hay servidor",
            "miércoles" => "hay servidor",
            "jueves" => "hay servidor",
            "viernes" => "hay servidor",
            default => "Finde"
        };

        
        //para comprobar si es par y guardarlo
        $numerillo = rand(0, 75);


        $esPar = match(true){
            ($numerillo == 0) => "El número es cero",
            ($numerillo % 2 == 0) => "El número es par",
            default => "El número es impar" 
        };

        $nota = rand(0, 10);

        $notas = match(true){
            ($nota >= 0 && $nota <=4) => "Suspenso",
            ($nota <= 6) => "Aprobado",
            ($nota <= 8) => "Notable",
            ($nota <= 10) => "Genio",
            default => "Número incorrecto"
        };
        */


        $oper = (rand(1, 5));
        $op = match($oper) {
            1 => "suma",
            2 => "resta",
            3 => "multiplicacion",
            4 => "division",
            5 => "modulo"
        };

        function calculadora($op, $x, $y){
            $res = match ($op){
                "suma" => $x + $y,
                "resta" => $x - $y,
                "multiplicacion", "división" => $x * $y,
                "division", "división" => $x / $y,
                "modulo", "módulo" => $x % $y
                default => 
            };
            return $res;
        }

        echo calculadora("suma", 15, 10);
    ?>
</body>
</html>
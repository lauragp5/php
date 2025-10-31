<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle While</title>
</head>
<body>

     <ol> -
        <?php
        /* 
        $multiplo = 1;
        while($multiplo <= 20){
            echo "<li>". $multiplo*7 ."</li>";
            $multiplo++;
        }
        
    ?>
        </ol>
    <!-- Otra forma de hacer el ejercicio anterior-->
      <ol>
        <?php
        $multiplo = 1;
        while($multiplo <= 20){ ?>
        <li> <?php echo$multiplo*7; ?></li>
        <?php $multiplo++; } ?>
        </ol>
        

        <?php 
        $numero = rand(300, 1000);
        $cont = 0;
        echo "el número es $numero ";
        while($numero >= 1){
            $numero = intval($numero/10);
            $cont++;
        }
        echo "y tiene $cont digitos <br>";

        function exponente($base, $exp){
            $res = $base;
            while($exp > 1){
                $res = $res * $base;
                $exp--;
            }
            return $res;
        }

        echo exponente(3,3);
        ?> */ ?>

        <style>
            table{
                border: 1px solid black;
                border-collapse: collapse;
            } 
            td{
                border: 1px solid black;
            }
            th{
                border: 1px solid black;
            }
        </style>
        <table>
        <?php
            $count = 1;
            $res = 0;

            while($res < 100){
                $var = rand(1, 10);
                $res += $var;
                $count++;
                echo "<tr><th colspan = 2> Intento $count</th></tr>";
                echo "<tr><td> Num: $var</td> <td> Acum $res</td></tr>";
                
            }
            ?>
        </table>


        
</body>
</html>
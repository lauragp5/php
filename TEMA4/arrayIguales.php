<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar arrays</title>
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <form action="" method= "GET">
        <label for="num1">Número 1: </label>
        <input type="number" name="num1"><br>

        <label for="num2">Número 2: </label>
        <input type="number" name="num2"><br>


        <input type="submit" value="OK"><br>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $num1 = $_GET("num1");
            $num2 = $_GET("num2");
            $array1 = [extraerArray($num1)];
            $array2 = [extraerArray($num2)];

            sort($num1);
            sort($num2);

            if($num1 == $num2){
                echo ("Son iguales!!!!");
            }else{
                echo("No son iguales :(");
            }
        }

        function extraerArray($numero){

            $array1 = [];

            while($numero/10 >= 1){
                $array1[] = $numero % 10;
                
                $numero = $numero/10;
                $numero = intval($numero);
            }

            krsort($array1);
            $array1 = array_values($array1);

            return $array1;
        }
    ?>
</body>
</html>
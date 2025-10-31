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
        <label for="temp">Temperatura: </label>
        <input type="number" name="temp"><br>

        <select name="ud_original" >
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
            <option value="F">Farenheit</option>
        </select>

        <select name="ud_nueva" >
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
            <option value="F">Farenheit</option>
        </select>

        <input type="submit" value="ENVIAR"><br>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $temp = $_POST("temp");
            $orig = $_POST("ud_original");
            $nuev = $_POST("ud_nueva");
        }

        if($orig == $nuev){
            $res = "La unidad es la misma $orig $temp";
        }
        else{
            if($orig == "c"){
                if($nuev == "k"){
                    $res = $temp + 273.15;
                }

                elseif($nuev == "f"){
                    $res = ($temp * 9/5) + 32;
                }
            }

            elseif($orig == "k"){
                if($nuev == "c"){
                    $res = $temp - 273.15;
                }

                elseif($nuev == "f"){
                    $res = ($temp - 273) * 9/5 +21;
                }
            }
            
            elseif ($orig == "f") {
                if($nuev == "k"){
 
                }

                elseif($nuev == "c"){
                    
                } 
            }
        }
    ?>
</body>
</html>
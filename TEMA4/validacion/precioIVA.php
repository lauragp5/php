<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precio con IVA</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    ?>
</head>
<body>
    <form action="" method="POST">
        <label for="precio">Precio: </label>
        <input type="number" name="precio">
        <select name="IVA"></select>
        <option disabled selected>--ELIGE UN IVA--</option>
        <option value="21">GENERAL</option>
        <option value="10">REDUCIDO</option>
        <option value="4">SUPERREDUCIDO</option>
        <input type="submit"> CALCULAR
    </form>

    <?php
        
        if($_SERVER["REQUEST_METHOD"] = "POST"){

            $tmp_precio = $_SERVER["precio"];
            if($tmp_precio == ""){
                
            }
            if(!isset($_POST["IVA"])){
            $err_iva = "<p'>Elige un IVA</p>";
        }else{
            $iva = floatval($_POST["IVA"])*0.10;
        }
        }

    ?>
</body>
</html>
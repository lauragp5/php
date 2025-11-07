<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura Tienda</title>
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <form action="" method="POST">
        <label for="manzana">Manzanas: </label>
        <input type="number" name="manzana" value="0">

        <br>

        <label for="leche">Leche: </label>
        <input type="number" name="leche" value="0">

        <br>

        <label for="pan">Pan: </label>
        <input type="number" name="pan" value="0">

        <br>

        <label for="cerveza">Cerveza: </label>
        <input type="number" name="cerveza" value="0">

        <br>

        <label for="refresco"> Refresco: </label>
        <input type="number" name="refresco" value="0">

        <br>

        <label for="2TB USB"> 2TB USB: </label>
        <input type="number" name="2TB USB" value="0">

        <br>

        <input type="submit" value="ENVIAR">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
        }
    ?>
</body>
</html>
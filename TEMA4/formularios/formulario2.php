<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php 
        error_reporting( E_ALL ); 
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_mensaje = $_POST["mensaje"];
            $_veces = $_POST["veces"];
        }
        echo ("<ol>");
        for ($i=0; $i < $_veces; $i++) { 
            echo ("<li> $_mensaje </li>");
        }
        echo ("</ol>");
    ?>
</body>
</html>